<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yeucaugiaovien extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('email');
	}

	public function index()
	{
		$rules = array(
			array(
				'field' => 'subject',
				'label' => 'Môn học',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Vui lòng chọn ít nhất 1 môn học'
				)
			),
			array(
				'field' => 'fullname',
				'label' => 'Họ và tên',
				'rules' => 'trim|strip_tags|htmlspecialchars|min_length[6]|required'
			),
			array(
				'field' => 'tel',
				'label' => 'Số điện thoại',
				'rules' => 'trim|strip_tags|htmlspecialchars|required|numeric|min_length[10]'
			)
		);
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() === FALSE)
		{
			$data['title'] = 'Yêu cầu giáo viên';
			$this->load->view('client/yeucaugiaovien', $data);
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
				$mess .= "<br>Học: $learn_at[0]";
				$alt_mess .= " Học: $learn_at[0]";
				for ($i = 1; $i < count($learn_at);$i++) {
					$mess .= ", $learn_at[$i]";
					$alt_mess .= ", $learn_at[$i]";
				}
			}
			if ($time)
			{
				$mess .= "<br>Học vào: $time[0]";
				$alt_mess .= ". Học vào: $time[0]";
				for ($j = 1; $j < count($time); $j++) {
					$mess .= ", $time[$j]";
					$alt_mess .= ", $time[$j]";
				}
			}
			if ($price)
			{
				$mess .= "<br>Mức giá: $price đồng";
				$alt_mess .= ". Mức giá: $price đồng";
			}
			if ($gender)
			{
				$mess .= "<br>Giới tính giáo viên: $gender[0]";
				$alt_mess .= ". Giới tính giáo viên: $gender[0]";
				for ($k = 1; $k < count($gender); $k++) {
					$mess .= ", $gender[$k]";
					$alt_mess .= ", $gender[$k]";
				}
			}
			if ($level)
			{
				$mess .= "<br>Trình độ giáo viên: $level[0]";
				$alt_mess .= ". Trình độ giáo viên: $level[0]";
				for ($l = 1; $l < count($level); $l++) {
					$mess .= ", $level[$l]";
					$alt_mess .= ", $level[$l]";
				}
			}

			$this->email->message($mess);
			$this->email->set_alt_message($alt_mess);

			if ($this->email->send()) {
				$data['title'] = 'Cảm ơn bạn';
				$data['anchor'] = $subject;
				$this->load->view('client/registersuccess', $data);
			}
		}		
	}
}