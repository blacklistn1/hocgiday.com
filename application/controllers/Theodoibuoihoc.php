<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 29/11/2017
 * Time: 4:21 CH
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Theodoibuoihoc extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            'm_students' => 'students',
            'm_teachers' => 'teachers',
            'm_dayvahoc' => 'dayvahoc'
        ]);
    }

    public function index($giaovien = '', $hocsinh = '')
    {
        if (($giaovien != NULL) && ($hocsinh != NULL)) {
            $hocsinh = $this->students->read_row('ten, id', ['ma' => $hocsinh]);
            $giaovien = $this->teachers->read_row('id, full_name', ['nametag' => $giaovien]);
            $field = '*';
            $where = ['teacher_id' => $giaovien->id, 'student_id' => $hocsinh->id];
            $cond['order_by'] = 'ngay DESC';
            $this->data['result'] = $this->dayvahoc->read_data($field, $where, $cond);

            $this->data['giaovien'] = $giaovien;
            $this->data['hocsinh'] = $hocsinh;
            $this->load->view('client/dayvahoc', $this->data);
        }
    }
}
