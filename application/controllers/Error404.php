<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title'] = 'Rất tiếc không tìm thấy yêu cầu';
		$this->load->view('errors/error_404', $data);
	}
}

