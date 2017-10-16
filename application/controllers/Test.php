<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Test extends MY_Controller
{	
	
	function __construct()
	{
		parent::__construct();
		$this->metadata = $this->_get_metadata($this->uri);
	}

	function index()
	{
		$cur_page = ($this->input->get('p')) ? $this->input->get('p') : 1;
		$mon_hoc = ($this->input->get('s')) ? $this->input->get('s') : 'guitar';
		$per_page = 5;
		$sql['field'] = 'full_name, dia_chi_nha, vi_tri';
		$sql['where'] = array('mon_hoc' => $mon_hoc, 'citytag' => 'hanoi');
		$sql['cond']['order_by'] = 'vi_tri ASC';
		$res = $this->paginate_item($cur_page, $per_page, $sql);
		var_dump($res['rec']);
		var_dump($this->uri);
		var_dump($this->metadata);
		// $this->load->view('client/test');
	}
}

