<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Dangkygiangday extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->lang->load('form_validation', 'vietnamese');
    }

    public function index()
    {
        $this->data = $this->metadata;
        $rules = array(
            array(
                'field' => 'fullname',
                'label' => 'Họ và tên',
                'rules' => 'trim|strip_tags|htmlspecialchars|required|min_length[6]',
                'errors'=> array(
                    'required' => $this->lang->line('form_validation_required'),
                    'min_length' => $this->lang->line('form_validation_min_length')
                )
            ),
            array(
                'field' => 'tel',
                'label' => 'Số điện thoại',
                'rules' => 'trim|required|numeric|min_length[10]|max_length[13]|regex_match[/((\+84)|(0(43)*))\d{7}\d?\d?\d?/]',
                'errors'=> array(
                    'required' => $this->lang->line('form_validation_required'),
                    'numeric' => $this->lang->line('form_validation_is_numeric'),
                    'min_length' => $this->lang->line('form_validation_min_length'),
                    'max_length' => $this->lang->line('form_validation_max_length'),
                    'regex_match' => $this->lang->line('form_validation_regex_match')
                )
            ),
            array(
                'field' => 'email',
                'label' => 'Địa chỉ email',
                'rules' => 'trim|strip_tags|htmlspecialchars|required|valid_email',
                'errors'=> array(
                    'required' => $this->lang->line('form_validation_required'),
                    'valid_email' => $this->lang->line('form_validation_valid_email')
                )
            ),
            array(
                'field' => 'address',
                'label' => 'Địa chỉ thường trú',
                'rules' => 'trim|strip_tags|htmlspecialchars|required',
                'errors'=> array(
                    'required' => $this->lang->line('form_validation_required')
                )
            ),
            array(
                'field' => 'subject_request[]',
                'label' => 'Môn học đăng ký',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Vui lòng chọn ít nhất 1 môn học'
                )
            )
        );
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('client/main', $this->data);
        }
        else
        {
            $fullname = $this->input->post('fullname');
            $tel = $this->input->post('tel');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $subject_request_arr = $this->input->post('subject_request[]');
            $subject_request = implode(", ",$subject_request_arr);
            $video = ($this->input->post('video')) ? $this->input->post('video') : FALSE;
            $about = ($this->input->post('about')) ? $this->input->post('about') : FALSE;

            // Mail config
            $this->email->from($email);
            $this->email->to('ndwuong@hocgiday.vn');
            // $this->email->cc(array('ndwuong@hocgiday.vn', 'ndwuong2@gmail.com'));
            $this->email->subject("Đơn đăng ký giảng dạy cùng Học Gì Đây? của $fullname");

            // Mail body
            $mess = 'Phần bắt buộc'.
                "<br>Họ và tên: $fullname".
                "<br>Số điện thoại: $tel".
                "<br>Email: $email".
                "<br>Địa chỉ: $address".
                "<br>Đăng ký kiểm tra năng lực môn: ".$subject_request;

            $alt_mess = "Họ và tên: $fullname. Số điện thoại: $tel. Email: $email. Địa chỉ: $address. Đăng ký kiểm tra năng lực môn: ".$subject_request;
            if ($video)
            {
                $mess .= "<br>Link video: $video";
                $alt_mess .= ". Link video: $video";
            }
            if ($about)
            {
                $mess .= "<br>Phần giới thiệu bản thân: <br>$about";
                $alt_mess .= ". Phần giới thiệu: $about";
            }
            $this->email->message($mess);
            $this->email->set_alt_message($alt_mess);

            // And send the mail
            if ($this->email->send())
            {
                $this->load->view('client/end_action/dangkygiangday_success');
            }
            else
            {
                $data['error'] = $this->email->print_debugger();
                $this->load->view('client/end_action/sendmailerror',$data);
            }
        }
    }
}
