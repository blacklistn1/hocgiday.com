<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function login()
	{
		$this->form_validation->set_rules('username','Tên người dùng','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {
			$this->load->view('admin/checklogin');
		}
		
		
	}
}