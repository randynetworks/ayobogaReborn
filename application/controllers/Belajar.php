<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('belajar_model');
        $this->load->helper('url_helper');

    }
	

	public function belajar_masak()
	{
		$data['cards_masak'] = $this->belajar_model->get_card_belajar_product();
        $this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/belajar_masak',$data);
        $this->load->view('templates/footer'); 

	}

	public function belajar_service()
	{
		$data['cards_service'] = $this->belajar_model->get_card_belajar_service();
        $this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/belajar_service',$data);
        $this->load->view('templates/footer'); 

	}

}