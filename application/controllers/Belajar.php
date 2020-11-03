<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belajar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('belajar_model');
		$this->load->helper('url_helper');
		$this->load->helper('typography');
	}

	// Menu Utama
	public function belajar_masak()
	{
		$data['cards_masak'] = $this->belajar_model->get_card_belajar_product();
		$this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/belajar_masak', $data);
		$this->load->view('templates/footer');
	}

	public function belajar_service()
	{
		$data['cards_service'] = $this->belajar_model->get_card_belajar_service();
		$this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/belajar_service', $data);
		$this->load->view('templates/footer');
	}

	// view per menu
	public function view_masak($slug)
	{
		$data['cards_masak_item'] = $this->belajar_model->get_card_belajar_product($slug);
		$data['items'] = $this->belajar_model->getMaterial_product($slug);
		$this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/view_masak', $data);
		$this->load->view('templates/footer');
	}

	public function view_service($slug = null)
	{
		$data['cards_service_item'] = $this->belajar_model->get_card_belajar_service($slug);
		$data['items'] = $this->belajar_model->getMaterial_product($slug);

		$this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/view_service', $data);
		$this->load->view('templates/footer');
	}
}
