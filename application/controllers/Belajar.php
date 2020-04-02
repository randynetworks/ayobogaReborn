<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('belajar_masak_model');
        $this->load->helper('url_helper');

    }
	

	public function belajar_masak()
	{
		$data['cards_masak'] = $this->belajar_masak_model->get_card_belajar();
        $this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/belajar_masak',$data);
        $this->load->view('templates/footer'); 

	}

}