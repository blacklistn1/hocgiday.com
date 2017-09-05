<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guitar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_guitar');
		$this->load->library('email');
	}

	function index()
	{
		$this->city('hanoi');
	}

	function city($city = '', $page = '1')
	{
		if (!$city)
		{
			redirect('/');
		}
		else
		{
			$rules = array(
				array(
					'field' => 'fullname',
					'label' => 'Tên đầy đủ',
					'rules' => 'required'
				),
				array(
					'field' => 'tel',
					'label' => 'Số điện thoại',
					'rules' => 'required'
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
				$per_page = 10;
				$num_of_links = 2;
				$min_page = $page - $num_of_links;
				$max_page = $page + $num_of_links;
				$offset = ($page - 1) * $per_page;
				$field = '*';
				$where = array('citytag' => $city, 'status' => 1);
				$cond['order_by'] = 'vi_tri ASC';
				$cond['limit'] = array($per_page, $offset);
				$data['result'] = $this->m_guitar->read_data($field ,$where, $cond);

				$total_pages = $this->count_pages($field, $where, $per_page);
				if ($min_page < 1) {$min_page = 1;}
				if ($max_page > $total_pages) {$max_page = $total_pages;}
				$data['total_pages'] = $total_pages;
				$data['min_page'] = $min_page;
				$data['max_page'] = $max_page;
				$data['cur_page'] = $page;

				$data['title'] = 'Tìm giáo viên Guitar tại nhà hoặc tại lớp';
				$this->load->view('client/guitar_hanoi', $data);
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
				$learn_at = array();
				if ($this->input->post('learn-at[]'))
				{
					$learn_at[0] = $_POST['learn-at'][0];
					$mess .= "<br>Đăng ký học: $learn_at[0]";
					for ($k = 1; $k < count($this->input->post('learn-at')); $k++) {
						$learn_at[$k] = $_POST['learn-at'][$k];
						$mess .= ", $learn_at[$k]";
					}
				}
				$learn_day = array();
				if ($this->input->post('learn-day[]'))
				{
					$learn_day[0] = $_POST['learn-day'][0];
					$mess .= "<br>Vào: $learn_day[0]";
					for ($i = 1; $i < count($_POST['learn-day']); $i++) {
						$learn_day[$i] = $_POST['learn-day'][$i];
						$mess .= ", $learn_day[$i]";
					}
				}
				// $alt_mess = $mess;
				// $alt_mess = preg_replace('/<br>/',"\r\n",$mess);
				$this->email->message($mess);
				// $this->email->set_alt_message($alt_mess);
				if ($this->email->send())
				{
					$data['title'] = 'Cảm ơn';
					$data['teacher'] = $teacher;
					$data['subject'] = $subject;
					$this->load->view('client/thankyou',$data);
				}
				else
				{
					$data['error'] = $this->email->print_debugger();
					$this->load->view('client/sendmailerror',$data);
				}
			}
		}
	}

	function count_pages($field, $where, $per_page)
	{
		$res = count($this->m_guitar->read_data($field, $where));
		$total_pages = ceil((float)$res / (float)$per_page);
		return $total_pages;
	}
}
