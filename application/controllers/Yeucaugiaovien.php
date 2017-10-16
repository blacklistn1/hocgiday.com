<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yeucaugiaovien extends MY_Controller {
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
				'field' => 'subject',
				'label' => 'Môn học',
				'rules' => 'required',
				'errors' => array(
					'required' => $this->lang->line('form_validation_required')
				)
			),
			array(
				'field' => 'fullname',
				'label' => 'Họ và tên',
				'rules' => 'trim|strip_tags|htmlspecialchars|min_length[6]|required',
				'errors' => array(
					'required' => $this->lang->line('form_validation_required'),
					'min_length' => $this->lang->line('form_validation_min_length')
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
			)
		);
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('client/main', $this->data);
		}
		else
		{
			$subject = $this->input->post('subject');
			$fullname = $this->input->post('fullname');
			$tel = $this->input->post('tel');
			$learn_at = array();
			$learn_at = ($this->input->post('learn-at[]')) ? $this->input->post('learn-at[]') : FALSE;
			$time = array();
			$time = ($this->input->post('time[]')) ? $this->input->post('time[]') : FALSE;
			$price = ($this->input->post('price-hidden')) ? $this->input->post('price-hidden') : FALSE;
			$gender = array();
			$gender = ($this->input->post('gender[]')) ? $this->input->post('gender[]') : FALSE;
			$level = array();
			$level = ($this->input->post('level[]')) ? $this->input->post('level[]') : FALSE;

			// Mail configuration
			$this->email->from('no-reply@customer.com');
			$this->email->to('ndwuong@hocgiday.vn');
			$this->email->subject('Đơn yêu cầu giáo viên '.$subject);
			$mess = "Phần bắt buộc:".
				"<br>Họ và tên: $fullname".
				"<br>Đăng ký học môn: $subject".
				"<br>Số điện thoại: $tel".
				"<br>Phần mở rộng:";
			$alt_mess = "Họ và tên: $fullname. Đăng ký học môn: $subject. Số điện thoại: $tel.";
			if ($learn_at)
			{
				$learn_at = implode(', ', $learn_at);
				$mess .= "<br>Học: $learn_at";
				$alt_mess .= " Học: $learn_at";
			}
			if ($time)
			{
				$time = implode(', ', $time);
				$mess .= "<br>Học vào: $time";
				$alt_mess .= ". Học vào: $time";
			}
			if ($price)
			{
				$mess .= "<br>Mức giá: $price đồng";
				$alt_mess .= ". Mức giá: $price đồng";
			}
			if ($gender)
			{
				$gender = implode(', ', $gender);
				$mess .= "<br>Giới tính giáo viên: $gender";
				$alt_mess .= ". Giới tính giáo viên: $gender";
			}
			if ($level)
			{
				$level = implode(', ', $level);
				$mess .= "<br>Trình độ giáo viên: $level";
				$alt_mess .= ". Trình độ giáo viên: $level";
			}

			$this->email->message($mess);
			$this->email->set_alt_message($alt_mess);

			if ($this->email->send())
			{
				$this->load->view('client/end_action/yeucaugiaovien_success', $this->data);
			}
			else
			{
			    $data['error'] = $this->email->print_debugger();
			    $this->load->view('client/end_action/sendmailerror',$data);
			}
		}
	}
}
