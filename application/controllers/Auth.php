<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->database();

	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}

		// role
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		// validasi
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// validasi success login
			$this->_login();
		}
	}

	private function _login()
	{

		$email    = $this->input->post('email');
		$password = $this->input->post('password');
		$user     = $this->db->get_where('user', ['email' => $email])->row_array();

		// avaible user
		if ($user) {
			//if active user
			if ($user['is_active'] == 1) {

				// check pass
				if (password_verify($password, $user['password'])) {

					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];

					$this->session->set_userdata($data);

					redirect('dashboard');
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger" role="alert">
                        Wrong Password.
                    </div>'
					);
				}
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger" role="alert">
                        Account not Active.
                    </div>'
				);
				redirect('auth');
			}
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}
		// role
		// roll fullname | gk boleh kosong
		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		// role email
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Is Email already used'
		]);

		// role pass1
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match',
			'min_length' => 'Password too short'
		]);

		// role pass2
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password2]');




		if ($this->form_validation->run() == false) {

			$data['title'] = 'Registration Page';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {

			$data = [

				'name'          => htmlspecialchars($this->input->post('name', true)),
				'email'         => htmlspecialchars($this->input->post('email', true)),
				'image'         => 'default.png',
				'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id'       => 1,
				'is_active'     => 0,
				'date_created'  => time()

			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success" role="alert">
                Your Account has been created, please login!
            </div>'
			);
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success" role="alert">
            You have been Logout!
        </div>'
		);
		redirect('auth');
	}
}
