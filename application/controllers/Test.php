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

	}

	function index()
    {
        $year = time_vn("Y");
        $month = time_vn("m");
        $lastday = time_vn("t");
        $startdate = date_format(date_create($year . "-" . $month . "-01"), "Y/m/d");
        $enddate = date_format(date_create($year . "-" . $month . "-" . $lastday), "Y/m/d");
        $data['result'] = $this->db->where(['ngay >=' => $startdate, 'ngay <=' => $enddate])->get('thoi_gian')->result();
        $this->load->view('client/test', $data);
    }
}

