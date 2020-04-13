<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index() {
		$this->load->view('register_view');
	}

	public function signup() {
		$nama = $this->input->POST('nama');
		$username = $this->input->POST('username');
		$password = md5($this->input->POST('password'));
		$konfirmasipassword = md5($this->input->POST('konfirmasipassword'));
		$level = 3;
		$result = $this->Register_model->check_username($username);

		if($result->num_rows() > 0) {
			echo "<script>alert('Username sudah ada');history.go(-1);</script>";
		}

		elseif($password != $konfirmasipassword) {
			
			echo "<script>alert('Password tidak sama');history.go(-1);</script>";

		} else {

			$data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'level' => $level
			);

			$this->Register_model->input_data($data,'users_tbl');
			redirect('Login');
		}
	}

	public function login() {
		$this->load->view('login_view');
	}

}
