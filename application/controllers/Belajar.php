<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belajar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('belajar_model');
		$this->load->helper('typography');
	}

	// Menu Utama
	public function belajar_masak()
	{
		$dataHeader = [
			'title' => "Belajar Masak di Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$kode = 'BP';

		$data = [
			'cards_masak' => $this->belajar_model->get_card('menus', $kode)
		]; 

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('belajar/belajar_masak', $data);
		$this->load->view('templates/footer');
	}

	// view per menu
	public function view_masak($slug)
	{
		$dataHeader = [
			'title' => "Belajar Masak di Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$kode = 'BP';

		$data = [
			'cards_masak_item' => $this->belajar_model->get_card('menus', $kode, $slug),
			'items' => $this->belajar_model->get_material($slug)
		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('belajar/view_masak', $data);
		$this->load->view('templates/footer');
	}

	public function view_service($slug = null)
	{
		$data = [
			'cards_service_item' => $this->belajar_model->get_card_belajar_service($slug),
			'items' => $this->belajar_model->getMaterial_product($slug)
		];


		$this->load->view('templates/header');
		$this->load->view('belajar/view_service', $data);
		$this->load->view('templates/footer');
	}

	public function belajar_service()
	{
		$dataHeader = [
			'title' => "Belajar Masak di Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$data = [
			'cards_service' => $this->belajar_model->get_card_belajar_service()
		];


		$this->load->view('templates/header', $dataHeader);
		$this->load->view('belajar/belajar_service', $data);
		$this->load->view('templates/footer');
	}

}
