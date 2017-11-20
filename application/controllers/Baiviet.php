<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baiviet extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_news');
    $this->lang->load('content', 'vietnamese');
  }

  public function index()
  {
    if ($this->metadata)
    {
      $this->data = $this->metadata;
    }
    $this->data['hot_news'] = $this->hot_news();
    $this->data['recent_news'] = $this->recent_news();
    $this->data['page_title'] = 'Bài viết';
    $this->load->view('client/main', $this->data);
  }

  public function news_list()
  {
    if ($this->metadata)
    {
      $this->data = $this->metadata;
    }
    
    // Required properties
    $per_page = 10;
    $num_of_links = 2;
    $cur_page = ($this->input->get('p')) ? $this->input->get('p') : 1;
    $min_page = $cur_page - $num_of_links;
    $max_page = $cur_page + $num_of_links;

    // Pagination controller
    $sql['model'] = 'm_news';
    $sql['cond']['order_by'] = 'ngay_dang DESC';
    $sql['where'] = array(1=>1);
    $sql['field'] = 'ten_bai_viet, ngay_dang, nguoi_dang, slug, mo_ta_ngan, tags';
    $result = $this->paginate_item($cur_page, $per_page, $sql);
    if ($min_page < 1) {$min_page = 1;}
    if ($max_page > $result['total_pages']) {$max_page = $result['total_pages'];}
    $this->data['result'] = $result['record'];
    $this->data['total_pages'] = $result['total_pages'];
    $this->data['min_page'] = $min_page;
    $this->data['max_page'] = $max_page;
    $this->data['cur_page'] = $cur_page;
    $this->load->view('client/main', $this->data);
  }

  public function news_detail($slug = '')
  {
    if (!$slug)
    {
      $this->index();
    }
    else
    {
      $where = array('slug' => $slug);
      $result = $this->m_news->read_row('*',$where);
      $contact = $this->m_contacts->read_row('*', array('id' => 1));
      if ($result)
      {
        $this->load->library('email');
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
              'regex_match' => $this->lang->line('form_validation_regex_match')
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
          $this->data['phone'] = $contact->phone;
          $this->data['contact_active'] = $contact->contact_active;
          $this->data['phone_label'] = $contact->phone_label;
          $this->data['page_title'] = $result->ten_bai_viet;
          $this->data['meta_desc'] = $result->mo_ta_ngan;
          $this->data['thumbnail'] = $result->thumbnail;
          if (preg_match('/guitar/', $result->tags))
          {
            $this->data['banner'] = 'banner-guitar';
            $this->data['target_uri'] = 'guitar';
          }
          elseif (preg_match('/piano/', $result->tags))
          {
            $this->data['banner'] = 'banner-piano';
            $this->data['target_uri'] = 'piano';
          }
          $this->data['tags'] = explode(", ", $result->tags);
          $this->data['recent_news'] = $this->recent_news();
          $this->data['rec'] = $result;
          $this->data['view_body'] = 'news_detail';
          $this->data['has_header'] = 1;
          $this->data['has_menu'] = 1;
          $this->data['has_footer'] = 1;
          $this->data['is_home'] = 0;
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
          $mess .= "<br>Tại bài viết: ".$result->ten_bai_viet;
          $alt_mess .= ". Form được gửi về tại bài viết: ".$result->ten_bai_viet;
          $this->email->message($mess);
          $this->email->set_alt_message($alt_mess);
          if ($this->email->send())
          {
            $data['teacher'] = $teacher;
            $data['subject'] = $subject;
            $data['current_news'] = base_url('bai-viet/'.$result->slug.'/');
            $this->load->view('client/end_action/dangkyngay_baiviet_success',$data);
          }
          else
          {
            $data['error'] = $this->email->print_debugger();
            $this->load->view('client/end_action/sendmailerror',$data);
          }
        }
      }
      else
      {
        $this->index();
      }
    }
  }

  function hot_news()
  {
    $hot = array('hot' => '1');
    $cond['limit'] = 3;
    $field_hot = 'thumbnail, thumbnail_alt, ten_bai_viet, slug, so_luong_comments, ngay_dang, mo_ta_ngan';
    $hot_news = $this->m_news->read_data($field_hot, $hot, $cond);
    return $hot_news;
  }

  function recent_news()
  {
    $cond['order_by'] = 'ngay_dang DESC';
    $cond['limit'] = 3;
    $field = 'ten_bai_viet, slug, ngay_dang, thumbnail, thumbnail_alt, mo_ta_ngan';
    $this->m_news->add_filter($cond);
    $recent_news = $this->m_news->read_data($field);
    return $recent_news;
  }

  function recent_news_ajax($page = '1')
  {
    $offset = ($page - 1) * 3;
    $per_page = 3;
    $cond['order_by'] = 'ngay_dang DESC';
    $cond['limit'] = array($per_page, $offset);
    $where = array('status' => 1);
    $field = 'ten_bai_viet, slug, ngay_dang, thumbnail, thumbnail_alt, mo_ta_ngan';
    $result = $this->m_news->read_data($field, array(1=>1), $cond);
    $data['result'] = $result;
    echo json_encode($result);
  }
}
