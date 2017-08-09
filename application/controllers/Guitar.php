<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guitar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_guitar');
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
			$where = array('citytag' => 'hanoi');
			$data['title'] = 'Tìm giáo viên Guitar tại nhà hoặc tại lớp';
			$data['result'] = $this->m_guitar->read_data($where);
			$this->load->view('client/guitar_hanoi', $data);
		}
	}
}