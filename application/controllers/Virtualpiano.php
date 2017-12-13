<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 11/12/2017
 * Time: 5:36 CH
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Virtualpiano extends CI_Controller
{
    public function __contruct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->data['phone'] = '+84944852366';
        $this->data['contact_active'] = 1;
        $this->data['phone_label'] = '094 458 23 66';
        $this->data['has_menu'] = 1;
        $this->data['has_copyright'] = 1;
        $this->data['has_footer'] = 1;
        $this->load->view('client/virtualpiano', $this->data);
    }
}