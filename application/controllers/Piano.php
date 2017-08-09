<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Piano extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_piano');
	}

	function index()
	{
		$this->city('');
	}

	function city($city = '')
	{
		if (!$city)
		{
			redirect('/');
		}
		elseif ($city == 'hanoi')
		{
			$this->output->cache(30);
			$where = array('citytag' => 'hanoi');
			$data['title'] = 'Tìm giáo viên Piano tại nhà hoặc tại lớp';
			$data['result'] = $this->m_piano->read_data($where);
			$this->load->view('client/piano_hanoi', $data);
		}
	}
}