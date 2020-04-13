<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	function auth() {
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$result = $this->Login_model->check_user($username, $password);
		if($result->num_rows() > 0) {
			$data = $result->row_array();
			$username = $data['username'];
			$nama = $data['nama'];
			$level = $data['level'];
			$sesdata = array(
				'username' => $username,
				'nama' => $nama,
				'level'  => $level,
				'logged_in'  => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($level === '1') {
				redirect('Admin');
			} elseif($level === '2') {
				redirect('Operator');
			} else {
				redirect('User');
			}
		} else {
			echo "<script>alert('Kami tidak dapat menemukan akun anda. Silahkan ulang login atau daftar');history.go(-1);</script>";
		}
		$this->load->view('login_view');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}

	function register() {
		$this->load->view('register_view');
	}
}
