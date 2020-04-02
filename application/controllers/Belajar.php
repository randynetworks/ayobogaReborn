<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
    
	public function belajar_masak()
	{
        $this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('belajar/belajar_masak');
        $this->load->view('templates/footer'); 

	}

}