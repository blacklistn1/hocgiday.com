<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index($lang = '')
	{
		$this->lang->load('content', $lang=='' ? 'vietnamese' : $lang);
		$data['sign_in'] = $this->lang->line('sign_in');
		$data['register'] = $this->lang->line('register');
		$data['dashboard'] = $this->lang->line('dashboard');
		$data['search_for_teacher'] = $this->lang->line('search_for_teacher');
		$data['more_inf'] = $this->lang->line('more_inf');
		$data['are_you_teach'] = $this->lang->line('are_you_teach');
		$this->load->helper('url');
		$this->load->view('client/home', $data);
	}

	public function subject($sub = '',$city = '')
	{
		if (!$sub && !$city) {
			redirect('/');
		}
	}
}