<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function list_product()
	{	
		$data['page_title'] = "รายการสินค้า";
		$this->load->view('template/webpage_header',$data);
		$this->load->view('product/list_product');
		$this->load->view('template/webpage_footer');
	}
}
?>