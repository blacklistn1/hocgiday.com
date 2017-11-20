<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ho_tro extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_hotro');
	}

	public function index()
	{
		$this->data = $this->metadata;
		$this->data['for_teachers'] = $this->show_posts(2);
		$this->data['for_students'] = $this->show_posts(1);
		$this->load->view('client/main', $this->data);
		
	}

	function ho_tro_detail($slug)
	{
		$field = '*';
		$where = array('slug' => $slug, 'status' => 1);
		$result = $this->m_hotro->read_row($field, $where, FALSE, TRUE);
		$this->data['row'] = $result;
		$this->data['page_title'] = $result['page_title'];
		$this->data['contact_id'] = 1;
		$this->data['has_header'] = 1;
		$this->data['has_menu'] = 0;
		$this->data['has_footer'] = 0;
		$this->data['is_home'] = 0;
		$this->data['view_body'] = 'hotro';
		$this->load->view('client/main', $this->data);
	}

	public function show_posts($cat_id)
	{
		$field = '*';
		$where = array('cat_id' => $cat_id, 'status' => 1);
		$result = $this->m_hotro->read_data($field, $where);
		return $result;
	}
}
