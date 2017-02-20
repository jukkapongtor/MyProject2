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
		$this->load->view("template/webpage_header");
		$this->load->view('document/homepage');
		$this->load->view("template/webpage_footer");
	}
	public function list_product()
	{
		$this->load->view("template/webpage_header");
		$this->load->view('document/homepage');
		$this->load->view("template/webpage_footer");
	}

}
?>
