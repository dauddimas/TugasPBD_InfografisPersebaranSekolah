<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
		$this->load->model('Admin_model');
	}


	public function index() {
		if($this->session->userdata('level')==='1') {

			$x['data'] = $this->Admin_model->show_operator();
			$this->load->view('admin_view',$x);
			
		} else {
			echo "Access Denied!";
		}
	}



	function tambah_operator() {
		$nama_operator = $this->input->post('nama_operator');
		$username_operator = $this->input->post('username_operator');
		$password_operator = md5($this->input->post('password_operator'));
		$level_operator = "2";
		$this->Admin_model->tambah_operator($nama_operator,$username_operator,$password_operator,$level_operator);
		redirect('Admin');
	}

	function edit_operator() {
		$id_operator=$this->input->post('id_operator');
		$nama_operator=$this->input->post('nama_operator');
		$username_operator=$this->input->post('username_operator');
		$password_operator=md5($this->input->post('password_operator'));
		$level_operator=$this->input->post('level_operator');
		$this->Admin_model->edit_operator($id_operator,$nama_operator,$username_operator,$password_operator,$level_operator);
		redirect('Admin');
	}

	function hapus_operator() {
		$id_operator=$this->input->post('id_operator');
		$this->Admin_model->hapus_operator($id_operator);
		redirect('Admin');
	}

}