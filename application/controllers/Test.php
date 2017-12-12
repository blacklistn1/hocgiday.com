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
        $rec = $this->db->select('id')->get('teachers')->result();
        echo count($rec);
    }


}

