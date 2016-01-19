<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Addmint extends CI_Controller {

	function __construct(){
		parent::__construct();
		$arr_sess = array(
			'user_category' => 'admin',
			'user_name' => 'Sholahuddin',
			'user_photo' => '/assets/dist/img/user2-160x160.jpg'
			);
		$this->session->set_userdata($arr_sess);
		$this->load->library('Lib_output');
	}

	function index($value='')
	{
		$dt = array('title' => 'judul', 'content'=>'isi');
		$this->lib_output->output_display('add_new_post',$dt);
	}

	function dashboard($value='')
	{
		$this->load->view('layout/layout-admin');
	}

	// foreach ($li as $key => $value) {
	// 	if($key == 'attr'){
	// 		_stringify($attr)
	// 	}else{
	// 		jadi li_biasa
	// 	}
	// }
}
