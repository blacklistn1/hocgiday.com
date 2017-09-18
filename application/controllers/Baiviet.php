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

  public function news_list($page = '1')
  {

    $per_page = 10;
    $num_of_links = 2;
    $min_page = $page - $num_of_links;
    $max_page = $page + $num_of_links;
    $offset = ($page - 1) * $per_page;

    $cond['order_by'] = 'ngay_dang DESC';
    $cond['limit'] = array($per_page, $offset);
    $where = array(1=>1);
    $field = 'ten_bai_viet, ngay_dang, nguoi_dang, slug, mo_ta_ngan, tags';
    $data['result'] = $this->m_news->read_data($field, $where, $cond);

    $total_pages = $this->count_pages($field, $where, $per_page);
    if ($min_page < 1) {$min_page = 1;}
    if ($max_page > $total_pages) {$max_page = $total_pages;}
    $data['total_pages'] = $total_pages;
    $data['min_page'] = $min_page;
    $data['max_page'] = $max_page;
    $data['cur_page'] = $page;
    
    $data['title'] = 'Danh sách bài viết';
    $this->load->view('client/news_list', $data);
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
    if (!$slug)
    {
      redirect('/');
    }
    else
    {
      
    }
  }

  function hot_news()
  {
    $hot = array('hot' => '1');
    $cond['limit'] = 3;
    $field_hot = 'thumbnail, thumbnail_alt, ten_bai_viet, slug, so_luong_comments, ngay_dang, mo_ta_ngan';
    $hot_news = $this->m_news->read_data($field_hot, $hot, $cond);
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

  function recent_news_ajax($page = '1')
  {
    $offset = ($page - 1) * 3;
    $per_page = 3;
    $cond['order_by'] = 'ngay_dang DESC';
    $cond['limit'] = array($per_page, $offset);
    $where = array('status' => 1);
    $field = 'ten_bai_viet, slug, ngay_dang, thumbnail, thumbnail_alt, mo_ta_ngan';
    $result = $this->m_news->read_data($field, array(1=>1), $cond);
    $data['result'] = $result;
    echo json_encode($result);
  }

  function count_pages($field, $where, $per_page)
  {
    $res = count($this->m_news->read_data($field, $where));
    $total_pages = ceil((float)$res / (float)$per_page);
    return $total_pages;
  }
}
