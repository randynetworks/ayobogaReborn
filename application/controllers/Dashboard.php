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

		// SEARCHING
		// GET KEYWORD
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			
		} else {
			$data['keyword'] = 	null;
		}

		// reset
		if ($this->input->post('reset')) {
			$data['keyword'] = 	null;
		}
		$id = false;

		$data = [
			'menus' => $this->belajar_model->get_data($id, 'menus', $data['keyword'])
		];

		

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/menus', $data);
		$this->load->view('templates/footer');
	}


	public function set_menu()
	{
		$this->form_validation->set_rules('id_menu', 'id_menu', 'required');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('slug', 'slug', 'required');
		$this->form_validation->set_rules('info', 'info', 'required');

		$data = array(
			'id_menu' => $this->input->post('id_menu'),
			'title' => $this->input->post('title'),
			'slug' => $this->input->post('slug'),
			'info' => $this->input->post('info')
		);

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/menus');
		} else {
			$this->belajar_model->set_data($data, 'menus');
			redirect('dashboard/menus');
		}
	}

	public function destroy_menu($id)
	{
		$this->belajar_model->destroy_data($id, 'menus');
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
			'item' => $this->belajar_model->get_data($id,'menus')
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

			$this->belajar_model->update_data($where, $data, 'menus');
			redirect('dashboard/menus');
		}
	}


	public function materials()
	{
		$dataHeader = [
			'title' => "Dashboard Manage Materials di Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		// SEARCHING
		// GET KEYWORD
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			
		} else {
			$data['keyword'] = 	null;
		}

		// reset
		if ($this->input->post('reset')) {
			$data['keyword'] = 	null;
		}

		$id = false;

		$data = [
			'materials' => $this->belajar_model->get_data($id, 'materials', $data['keyword']),
		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/materials', $data);
		$this->load->view('templates/footer');
	}

	public function set_material()
	{
		$this->form_validation->set_rules('id_menu', 'id_menu', 'required');
		$this->form_validation->set_rules('id_material', 'id_material', 'required');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('slug', 'slug', 'required');
		$this->form_validation->set_rules('sub_title', 'sub_title', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/materials');
		} else {
			$data = array(
				'id_menu' => $this->input->post('id_menu'),
				'id_material' => $this->input->post('id_material'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'sub_title' => $this->input->post('sub_title'),
				'content' => $this->input->post('content')
			);
			$this->belajar_model->set_data($data, 'materials');
			redirect('dashboard/materials');
		}
	}

	public function destroy_material($id)
	{
		$this->belajar_model->destroy_data($id, 'materials');
		redirect('dashboard/materials');
	}

	// view per menu
	public function edit_material($id)
	{
		$dataHeader = [
			'title' => "Edit data Ayoboga",
			'desc' => "Website Belajar tentang Tata Boga bahasa Indonesia"
		];

		$data = [
			'item' => $this->belajar_model->get_data($id,'materials')
		];

		$this->load->view('templates/header', $dataHeader);
		$this->load->view('dashboard/edit_material', $data);
		$this->load->view('templates/footer');
	}

	public function update_material()
	{
		$this->form_validation->set_rules('id_material', 'id_material', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/materials');
		} else {
			$data = array(
				'id_menu' => $this->input->post('id_menu'),
				'id_material' => $this->input->post('id_material'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'sub_title' => $this->input->post('sub_title'),
				'content' => $this->input->post('content')
			);
			$where = array('id' => $this->input->post('id'));

			$this->belajar_model->update_data($where, $data, 'materials');
			redirect('dashboard/materials');
		}
	}
}
