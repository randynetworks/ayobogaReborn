<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('belajar_model');

		$this->load->helper('form');
		$this->load->library('form_validation');
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
			'menus' => $this->belajar_model->get_menus()
		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/menus', $data);
		$this->load->view('templates/footer');
	}

	public function materials()
	{
		$dataHeader = [
			'title' => "Dashboard Manage Materials di Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$data = [
			'materials' => $this->belajar_model->getMaterial_product(),

		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/materials', $data);
		$this->load->view('templates/footer');
	}

	public function set_menu()
	{
		$this->form_validation->set_rules('id_menu', 'id_menu', 'required');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('slug', 'slug', 'required');
		$this->form_validation->set_rules('info', 'info', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/menus');
		} else {
			$this->belajar_model->set_menu();
			redirect('dashboard/menus');
		}
	}

	public function destroy_menu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('menus');
		redirect('dashboard/menus');
	}

	// view per menu
	public function edit_menu($id)
	{
		$dataHeader = [
			'title' => "Edit data Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$data = [
			'item' => $this->belajar_model->get_menus($id)
		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/edit_menu', $data);
		$this->load->view('templates/footer');
	}

	public function update_menu()
	{
		$this->form_validation->set_rules('id_menu', 'id_menu', 'required');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('slug', 'slug', 'required');
		$this->form_validation->set_rules('info', 'info', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/menus');
		} else {
			$data = array(
				'id_menu' => $this->input->post('id_menu'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'info' => $this->input->post('info')
			);
			$where = array('id' => $this->input->post('id'));

			$this->belajar_model->update_menu($where, $data);
			redirect('dashboard/menus');
		}
	}
}
