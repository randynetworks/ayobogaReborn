<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('belajar_model');
	}

	public function index()
	{
		$dataHeader = [
			'title' => "Dashboard Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/home');
		$this->load->view('templates/footer');
	}

	public function menus()
	{
		$dataHeader = [
			'title' => "Dashboard Manage Menu di Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$data = [
			'menus' => $this->belajar_model->get_card_belajar_product()
		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/menus', $data);
		$this->load->view('templates/footer');
	}
}
