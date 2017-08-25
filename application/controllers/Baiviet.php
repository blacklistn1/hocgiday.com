<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baiviet extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_news');
  }

  public function index()
  {
    $data['hot_news'] = $this->hot_news();
    $data['recent_news'] = $this->recent_news();
    $data['title'] = 'Bài viết';
    $this->load->view('client/baiviet', $data);
  }

  public function news_detail($slug = '')
  {
    if (!$slug)
    {
      $this->index();
    }
    else
    {
      $where = array('slug' => $slug);
      $result = $this->m_news->read_row('*',$where);
      if ($result)
      {
        $data['title'] = $result->ten_bai_viet;
        $data['recent_news'] = $this->recent_news();
        $data['rec'] = $result;
        $this->load->view('client/news_detail', $data);
      }
      else
      {
        $this->index();
      }
    }
  }

  public function news_category($slug = '')
  {
    
  }

  function hot_news()
  {
    $hot = array('hot' => '1');
    $cond['limit'] = 3;
    $field_hot = 'thumbnail, thumbnail_alt, ten_bai_viet, slug, so_luong_comments, ngay_dang, mo_ta_ngan';
    $this->m_news->add_filter($cond);
    $hot_news = $this->m_news->read_data($field_hot, $hot);
    return $hot_news;
  }

  function recent_news()
  {
    $cond['order_by'] = 'ngay_dang DESC';
    $cond['limit'] = 3;
    $field = 'ten_bai_viet, slug, ngay_dang, thumbnail, thumbnail_alt, mo_ta_ngan';
    $this->m_news->add_filter($cond);
    $recent_news = $this->m_news->read_data($field);
    return $recent_news;
  }
}
