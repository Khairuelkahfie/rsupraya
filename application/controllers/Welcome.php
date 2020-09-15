<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('username')) {
		// 	redirect('auth');
		// }
		$this->load->model('Auth_model', 'auth');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() === false) {
			$this->load->view('auth/login');
		} else {
			$this->_login();
		}
	}
	private function _login()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		//jika uername ada
		$user = $this->auth->ambiluser($username);
		if ($user) {
			if (md5($password) == $user['password']) {
				$data = [
					'username' => $user['username'],
				];
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				echo "password anda salah";
			}
		} else {
			echo "username tidak ada";
		}
	}
	public function keluar()
	{
		$this->session->unset_userdata('username');
		redirect('auth');
	}
}
