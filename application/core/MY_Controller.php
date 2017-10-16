<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends CI_Controller
{

    public $uri;
    public $metadata;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_metadata');
        $this->uri = uri_string();
        $this->metadata = $this->_get_metadata($this->uri);
    }

    public function _get_metadata($uri)
    {
        if ($uri == '') {$uri = "/";}
        $where = array('uri' => $uri);
        $row = $this->m_metadata->read_row('*', $where, TRUE);
        return $row;
    }

    public function paginate_item($cur_page, $per_page, $sql)
    {
        $model = $sql['model'];
        $this->load->model($model);
        
        $start_index = ($cur_page - 1) * $per_page;
        $end_index = $cur_page * $per_page;
        $result = $this->$model->read_data($sql['field'], $sql['where'], $sql['cond']);
        $res['record'] = array();
        $res['total_pages'] = ceil((float)count($result) / (float)$per_page); // Abstract num_rows
        for ($i = $start_index; $i < $end_index; $i++)
        {
            if (isset($result[$i]))
            {
                $res['record'][$i] = $result[$i];
            }
        }
        return $res;
    }
}