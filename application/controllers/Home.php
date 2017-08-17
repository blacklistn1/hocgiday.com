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
}