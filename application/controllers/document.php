<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class document extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['page_title'] = "ยินดีต้อนรับสู่ร้านมุมเฟิร์น";
		$this->load->view("template/webpage_header",$data);
		$this->load->view('document/homepage');
		$this->load->view("template/webpage_footer");
	}
}
?>
