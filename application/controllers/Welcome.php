<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct() {
        parent::__construct();
        $this->load->model('card_News_model');
        $this->load->helper('url_helper');

    }

	public function index()
	{
		$data['card_news'] = $this->card_News_model->get_news();

		$this->load->view('templates/header');
		$this->load->view('main_page', $data);
		$this->load->view('templates/footer');

	}
}
