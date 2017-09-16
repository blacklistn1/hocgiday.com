<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Test extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_news');
	}

	function index()
	{
		$this->load->view('client/test');
	}

	function recent_news_ajax()
	{
		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$offset = ($page - 1) * 3;
		$per_page = 3;
		$cond['order_by'] = 'ngay_dang DESC';
		$cond['limit'] = array($per_page, $offset);
		$where = array('status' => 1);
		$field = 'ten_bai_viet, slug, ngay_dang, thumbnail, thumbnail_alt, mo_ta_ngan';
		$result = $this->m_news->read_data($field, array(1=>1), $cond);

		echo json_encode($result);
	}
}

