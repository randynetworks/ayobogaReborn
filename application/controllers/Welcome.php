<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data = [
			'title' => "Ayoboga Education | Codeigniter Edition",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$this->load->view('templates/header', $data);
		$this->load->view('main_page');
		$this->load->view('templates/footer');
	}
}
