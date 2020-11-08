<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('belajar_model');
		$this->load->library('form_validation');
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->database();
	}
	// email
	public function email()
	{
		return $this->session->userdata('email');
	}
	// USER
	public function user()
	{
		return $this->db->get_where('user', ['email' => $this->email()])->row_array();
	}

	// CHECK user
	public function check_user()
	{
		if (empty($this->email())) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger" role="alert">
				Oupps, you\'re not Login!
				</div>'
			);
			redirect('auth');
		}
	}

	// View Template
	public function view_template($content, $data)
	{
		$this->load->view('templates/dashboard_header', $data);
		$this->load->view('templates/dashboard_sidebar', $data);
		$this->load->view('templates/dashboard_topbar', $data);
		$this->load->view($content, $data);
		$this->load->view('templates/dashboard_footer');
	}

	public function search_logic()
	{
		// SEARCHING
		// GET KEYWORD
		if ($this->input->post('submit')) {
			return $data['keyword'] = $this->input->post('keyword');
		} else {
			return $data['keyword'] = 	null;
		}

		// reset
		if ($this->input->post('reset')) {
			return $data['keyword'] = 	null;
		}
	}

	public function post_content($menu)
	{
		if ($menu == 'menus') {

			$this->form_validation->set_rules('id_menu', 'id_menu', 'required');
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('slug', 'slug', 'required');
			$this->form_validation->set_rules('info', 'info', 'required');

			return array(
				'id_menu' => $this->input->post('id_menu'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'info' => $this->input->post('info')
			);
		} else if ($menu == 'materials') {

			$this->form_validation->set_rules('id_menu', 'id_menu', 'required');
			$this->form_validation->set_rules('id_material', 'id_material', 'required');
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('slug', 'slug', 'required');
			$this->form_validation->set_rules('sub_title', 'sub_title', 'required');
			$this->form_validation->set_rules('content', 'content', 'required');

			return array(
				'id_menu' => $this->input->post('id_menu'),
				'id_material' => $this->input->post('id_material'),
				'title' => $this->input->post('title'),
				'slug' => $this->input->post('slug'),
				'sub_title' => $this->input->post('sub_title'),
				'content' => $this->input->post('content')
			);
		}
	}

	public function infoData($title)
	{
		return [
			'title' => $title,
			'selected_dash' => "active",
			'user' => $this->user()
		];
	}


	public function index()
	{
		$this->check_user();
		$data = $this->infoData('Dashboard Admin');

		$this->view_template('admin/dashboard', $data);
	}

	public function me()
	{
		$this->check_user();

		$data = $this->infoData('My Profile');

		$this->view_template('admin/admin_profile', $data);
	}

	public function admin_list()
	{
		$this->check_user();
		$data = $this->infoData('List Admin');


		$data['admin_list'] = $this->db->get('user')->result_array();

		$this->view_template('admin/admin_list', $data);
	}


	public function menus()
	{
		$this->check_user();
		$data = $this->infoData('Manage Menu di Ayoboga');
		$keyword = $this->search_logic();
		$id = false;

		$data['menus'] = $this->belajar_model->get_data($id, 'menus', $keyword);

		$this->view_template('admin/menus', $data);
	}


	public function set_menu()
	{

		$this->check_user();

		$data = $this->post_content('menus');

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/menus');
		} else {
			$this->belajar_model->set_data($data, 'menus');
			redirect('dashboard/menus');
		}
	}

	public function destroy_menu($id)
	{
		$this->check_user();

		$this->belajar_model->destroy_data($id, 'menus');
		redirect('dashboard/menus');
	}

	// view per menu
	public function edit_menu($id)
	{
		$this->check_user();
		$data = $this->infoData("Edit Data Menu");

		$data['item'] = $this->belajar_model->get_data($id, 'menus');


		$this->view_template('admin/edit_menu', $data);
	}

	public function update_menu()
	{
		$this->check_user();

		$data = $this->post_content('menus');

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/menus');
		} else {
			$where = array('id' => $this->input->post('id'));

			$this->belajar_model->update_data($where, $data, 'menus');
			redirect('dashboard/menus');
		}
	}


	public function materials()
	{

		$this->check_user();
		$data = $this->infoData("Manage Material Ayoboga");

		$keyword = $this->search_logic();


		$id = false;

		$data['materials'] = $this->belajar_model->get_data($id, 'materials', $keyword);

		$this->view_template('admin/materials', $data);
	}

	public function set_material()
	{
		$this->check_user();

		$data = $this->post_content('materials');


		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/materials');
		} else {
			$this->belajar_model->set_data($data, 'materials');
			redirect('dashboard/materials');
		}
	}

	public function destroy_material($id)
	{
		$this->check_user();

		$this->belajar_model->destroy_data($id, 'materials');
		redirect('dashboard/materials');
	}

	// view per menu
	public function edit_material($id)
	{
		$this->check_user();
		$data = $this->infoData("Edit Material");

		$data['item'] = $this->belajar_model->get_data($id, 'materials');


		$this->view_template('admin/edit_material', $data);
	}

	public function update_material()
	{
		$this->check_user();

		$this->form_validation->set_rules('id_material', 'id_material', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('dashboard/materials');
		} else {
			$data = $this->post_content('materials');
			$where = array('id' => $this->input->post('id'));

			$this->belajar_model->update_data($where, $data, 'materials');
			redirect('dashboard/materials');
		}
	}
}
