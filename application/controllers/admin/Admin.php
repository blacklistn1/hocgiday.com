<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller {
  
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->view('admin/index');
  }

  function Login()
  {
    $rules = array(

    );
    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('admin/login');
    }
    
  }
}