<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baiviet extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_news');
  }

  public function index()
  {
    if ($this->metadata)
    {
      $this->data = $this->metadata;
    }
    $this->data['hot_news'] = $this->hot_news();
    $this->data['recent_news'] = $this->recent_news();
    $this->data['page_title'] = 'Bài viết';
    $this->load->view('client/main', $this->data);
  }

  public function news_list()
  {
    if ($this->metadata)
    {
      $this->data = $this->metadata;
    }
    
    // Required properties
    $per_page = 10;
    $num_of_links = 2;
    $cur_page = ($this->input->get('p')) ? $this->input->get('p') : 1;
    $min_page = $cur_page - $num_of_links;
    $max_page = $cur_page + $num_of_links;

    // Pagination controller
    $sql['model'] = 'm_news';
    $sql['cond']['order_by'] = 'ngay_dang DESC';
    $sql['where'] = array(1=>1);
    $sql['field'] = 'ten_bai_viet, ngay_dang, nguoi_dang, slug, mo_ta_ngan, tags';
    $result = $this->paginate_item($cur_page, $per_page, $sql);
    if ($min_page < 1) {$min_page = 1;}
    if ($max_page > $result['total_pages']) {$max_page = $result['total_pages'];}
    $this->data['result'] = $result['record'];
    $this->data['total_pages'] = $result['total_pages'];
    $this->data['min_page'] = $min_page;
    $this->data['max_page'] = $max_page;
    $this->data['cur_page'] = $cur_page;
    $this->load->view('client/main', $this->data);
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
        $this->data['page_title'] = $result->ten_bai_viet;
        $this->data['meta_desc'] = $result->mo_ta_ngan;
        $this->data['thumbnail'] = $result->thumbnail;
        $this->data['tags'] = explode(", ", $result->tags);
        $this->data['recent_news'] = $this->recent_news();
        $this->data['rec'] = $result;
        $this->data['view_body'] = 'news_detail';
        $this->data['has_header'] = 1;
        $this->data['has_menu'] = 1;
        $this->data['has_footer'] = 1;
        $this->load->view('client/main', $this->data);
      }
      else
      {
        $this->index();
      }
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
}
