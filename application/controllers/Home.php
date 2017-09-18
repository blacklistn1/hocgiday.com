<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['title'] = 'Học Gì Đây? | Tìm giáo viên nhạc dễ hơn hẳn';
		$this->load->view('client/home', $data);
	}

	public function terms()
	{
		$data['title'] = 'Điều khoản sử dụng';
		$this->load->view('client/dieukhoan', $data);
	}

	public function aboutus()
	{
		$data['title'] = 'Về Chúng Tôi';
		$this->load->view('client/vechungtoi',$data);
	}

	public function lp_teacher()
	{
		$data['title'] = 'Trở thành giáo viên';
		$this->load->view('client/lp_teacher', $data);
	}
}