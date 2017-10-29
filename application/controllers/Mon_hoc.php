<?php
defined('BASEPATH') OR exit('No driect script access allowed');

/**
* 
*/
class Mon_hoc extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->lang->load('content', 'vietnamese');
        $this->lang->load('form_validation', 'vietnamese');
        $this->load->model('m_teachers');
    }

    public function index($subject, $city = 'ha-noi')
    {
        if ($city == 'hanoi')
        {
            $city = 'ha-noi';
            redirect('/'.$subject.'/'.$city.'/');
        }
        $this->data = $this->metadata;
        $rules = array(
            array(
                'field' => 'fullname',
                'label' => 'Tên đầy đủ',
                'rules' => 'trim|strip_tags|htmlspecialchars|required',
                'errors' => array(
                    'required' => $this->lang->line('form_validation_required'),
                )
            ),
            array(
                'field' => 'tel',
                'label' => 'Số điện thoại',
                'rules' => 'trim|required|numeric|min_length[10]|max_length[13]|regex_match[/((\+84)|(0(43)*))\d{7}\d?\d?\d?/]',
                'errors' => array(
                    'required' => $this->lang->line('form_validation_required'),
                    'numeric' => $this->lang->line('form_validation_is_numeric'),
                    'max_length' => $this->lang->line('form_validation_max_length'),
                    'min_length' => $this->lang->line('form_validation_min_length'),
                    'regex_match' => 'Số điện thoại bạn vừa nhập không hợp lệ'
                )
            ),
            array(
                'field' => 'learn-at[]',
                'label' => 'learn-at[]',
                'rules' => 'required',
                'errors' => array('required' => 'Vui lòng chọn ít nhất 1 mục')
            )
        );
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() === FALSE)
        {
            $city = preg_replace('/-/','',$city);

            // Required variables
            $cur_page = ($this->input->get('p')) ? $this->input->get('p') : 1; // Current page
            $num_of_links = 2;
            $per_page = 8; // Items per page
            $min_page = $cur_page - $num_of_links;
            $max_page = $cur_page + $num_of_links;

            $sql['model'] = 'm_teachers';
            $sql['field'] = '*';
            $sql['where'] = array('mon_hoc' => $subject, 'citytag' => $city, 'status' => 1);
            $sql['cond']['order_by'] = 'vi_tri ASC';
            $result = $this->paginate_item($cur_page, $per_page, $sql); // Runs query
            if ($min_page < 1) {$min_page = 1;}
            if ($max_page > $result['total_pages']) {$max_page = $result['total_pages'];}        
            $this->data['total_pages'] = $result['total_pages'];
            $this->data['rec'] = $result['record'];
            $this->data['cur_page'] = $cur_page;
            $this->data['min_page'] = $min_page;
            $this->data['max_page'] = $max_page;
            $this->data['subject'] = $subject;
            $this->data['subject_vn'] = ($this->lang->line($subject)) ? $this->lang->line($subject) : $subject;
            $this->data['is_page_mon_hoc'] = true;
            $this->load->view('client/main', $this->data);
        }
        else
        {
            $this->email->from('no-reply@cusomter.com');
            $this->email->to('ndwuong@hocgiday.vn');

            $fullname = $this->input->post('fullname');
            $tel = $this->input->post('tel');
            $teacher = $this->input->post('teacher');
            $subject = $this->input->post('subject');
            $this->email->subject('Thông tin người dùng '.$fullname);
            $mess = "Họ và tên: $fullname".
                "<br>Số điện thoại: $tel".
                "<br>Đăng ký học môn: $subject".
                "<br>Với giáo viên: $teacher";
            $alt_mess = "Họ và tên: $fullname, Đăng ký học môn: $subject, Với giáo viên: $teacher";
            if ($this->input->post('learn-at[]'))
            {
                $learn_at = implode(', ', $this->input->post('learn-at'));
                $mess .= "<br>Đăng ký học: $learn_at";
                $alt_mess .= ", Đăng ký học: $learn_at";
            }
            if ($this->input->post('learn-day[]'))
            {
                $learn_day = implode(',', $this->input->post('learn-day'));
                $mess .= "<br>Vào: $learn_day";
                $alt_mess .= ", Vào: $learn_day";
            }
            $mess .= "<br>Tại trang: ".$this->data['page_title'];
            $mess .= ", Tại trang: ".$this->data['page_title'];
            $this->email->message($mess);
            $this->email->set_alt_message($alt_mess);
            if ($this->email->send())
            {
                $data['teacher'] = $teacher;
                $data['subject'] = $subject;
                $this->load->view('client/end_action/dangkyngay_success',$data);
            }
            else
            {
                $data['error'] = $this->email->print_debugger();
                $this->load->view('client/end_action/sendmailerror',$data);
            }
        }
    }
    
    public function lp($subject, $city = 'ha-noi')
    {
        $this->data = $this->metadata;
        $rules = array();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() === FALSE)
        {
            
            $city = preg_replace('/-/','',$city);

            $cur_page = ($this->input->get('p')) ? $this->input->get('p') : 1;
            $num_of_links = 2;
            $per_page = 8;
            $min_page = $cur_page - $num_of_links;
            $max_page = $cur_page + $num_of_links;

            $sql['model'] = 'm_teachers';
            $sql['field'] = '*';
            $sql['where'] = array('mon_hoc' => $subject, 'citytag' => $city, 'status' => 1);
            $sql['cond']['order_by'] = 'vi_tri ASC';
            $result = $this->paginate_item($cur_page, $per_page, $sql); // Runs query
            if ($min_page < 1) {$min_page = 1;}
            if ($max_page > $result['total_pages']) {$max_page = $result['total_pages'];}        
            $this->data['total_pages'] = $result['total_pages'];
            $this->data['result'] = $result['record'];
            $this->data['cur_page'] = $cur_page;
            $this->data['min_page'] = $min_page;
            $this->data['max_page'] = $max_page;
            $this->data['subject'] = $subject;
            $this->data['subject_vn'] = ($this->lang->line($subject)) ? $this->lang->line($subject) : $subject;
            $this->data['is_page_mon_hoc'] = TRUE;
            $this->load->view('client/inbound/teachers_list', $this->data);
        }
        else
        {
            $this->email->from('no-reply@cusomter.com');
            $this->email->to('ndwuong@hocgiday.vn');

            $fullname = $this->input->post('fullname');
            $tel = $this->input->post('tel');
            $teacher = $this->input->post('teacher');
            $subject = $this->input->post('subject');
            $this->email->subject('Thông tin người dùng '.$fullname);
            $mess = "Họ và tên: $fullname".
                "<br>Số điện thoại: $tel".
                "<br>Đăng ký học môn: $subject".
                "<br>Với giáo viên: $teacher";
            $alt_mess = "Họ và tên: $fullname, Đăng ký học môn: $subject, Với giáo viên: $teacher";
            if ($this->input->post('learn-at[]'))
            {
                $learn_at = implode(', ', $this->input->post('learn-at'));
                $mess .= "<br>Đăng ký học: $learn_at";
                $alt_mess .= ", Đăng ký học: $learn_at";
            }
            if ($this->input->post('learn-day[]'))
            {
                $learn_day = implode(',', $this->input->post('learn-day'));
                $mess .= "<br>Vào: $learn_day";
                $alt_mess .= ", Vào: $learn_day";
            }
            $mess .= "<br>Tại landing page: ".$this->data['page_title'];
            $this->email->message($mess);
            $this->email->set_alt_message($alt_mess);
            if ($this->email->send())
            {
                $data['teacher'] = $teacher;
                $data['subject'] = $subject;
                $this->load->view('client/end_action/dangkyngay_success',$data);
            }
            else
            {
                $data['error'] = $this->email->print_debugger();
                $this->load->view('client/end_action/sendmailerror',$data);
            }
        }
    }
}
