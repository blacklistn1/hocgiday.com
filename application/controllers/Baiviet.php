<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baiviet extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Bài viết';
    $this->load->view('client/baiviet', $data);
  }

  public function news_detail($name = '')
  {
    if ($name = '24-hop-am-co-ban')
    {
      $data['title'] = '24 Hợp Âm Phổ Biến';
      $this->load->view('client/'.$name, $data);
    }
    else
    {
      $this->index();
    }
  }
}
