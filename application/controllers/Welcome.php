<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('main_page');
		$this->load->view('templates/footer');

	}
}
