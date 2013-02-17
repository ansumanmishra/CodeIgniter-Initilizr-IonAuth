<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array('main_content'=>'news', 'title'=>'Home');
		$this->load->view('template', $data);
	}
}