<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('main_page');
		$this->load->view('templates/footer');
	}
}
