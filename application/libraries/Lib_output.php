<?php

class Lib_output{
	function index($value='')
	{
		echo "aaa";
	}
	function output_display($url,$data){
		$CI =& get_instance();
		$CI->load->view('layout/layout-admin',array('content_url' => $url, 'content_data' => $data));
	}
}
