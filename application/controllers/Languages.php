<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_controller {

	public function home_page($lang){

		$this->lang->load('content', $lang=='' ? 'vn' : $lang);
		$data['sign_in'] = $this->lang->line('sign_in');
		$data['register'] = $this->lang->line('register');
		$this->load->view('home', $data);
	}
}