<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->data = $this->metadata;
		$this->load->view('client/main', $this->data);
	}

	public function terms()
	{
		$this->load->view('client/dieukhoan');
	}

	public function aboutus()
	{
		$this->load->view('client/vechungtoi');
	}

	public function lp_teacher()
	{
		$data['title'] = 'Trở thành giáo viên';
		$this->load->view('client/landing_pages/lp_teacher', $data);
	}
}