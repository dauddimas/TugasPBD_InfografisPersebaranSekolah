<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
		$this->load->model('Operator_model');
	}


	public function index() {
		if($this->session->userdata('level')==='2') {

			$x['data'] = $this->Operator_model->show_datasekolah();
			$this->load->view('operator_view',$x);

		} else {
			echo "Access Denied!";
		}
	}

	function tambah_datasekolah() {
		$kecamatan = $this->input->post('kecamatan');
		$sd_negeri = $this->input->post('sd_negeri');
		$sd_swasta = $this->input->post('sd_swasta');
		$smp_negeri = $this->input->post('smp_negeri');
		$smp_swasta = $this->input->post('smp_swasta');
		$sma_negeri = $this->input->post('sma_negeri');
		$sma_swasta = $this->input->post('sma_swasta');
		$smk_negeri = $this->input->post('smk_negeri');
		$smk_swasta = $this->input->post('smk_swasta');
		$slb_negeri = $this->input->post('slb_negeri');
		$slb_swasta = $this->input->post('slb_swasta');
		$this->Operator_model->tambah_datasekolah($kecamatan,$sd_negeri,$sd_swasta,$smp_negeri,$smp_swasta,$sma_negeri,$sma_swasta,$smk_negeri,$smk_swasta,$slb_negeri,$slb_swasta);
		redirect('Operator');
	}

	function edit_datasekolah() {
		$id_kecamatan=$this->input->post('id_kecamatan');
		$kecamatan = $this->input->post('kecamatan');
		$sd_negeri = $this->input->post('sd_negeri');
		$sd_swasta = $this->input->post('sd_swasta');
		$smp_negeri = $this->input->post('smp_negeri');
		$smp_swasta = $this->input->post('smp_swasta');
		$sma_negeri = $this->input->post('sma_negeri');
		$sma_swasta = $this->input->post('sma_swasta');
		$smk_negeri = $this->input->post('smk_negeri');
		$smk_swasta = $this->input->post('smk_swasta');
		$slb_negeri = $this->input->post('slb_negeri');
		$slb_swasta = $this->input->post('slb_swasta');
		$this->Operator_model->tambah_datasekolah($kecamatan,$sd_negeri,$sd_swasta,$smp_negeri,$smp_swasta,$sma_negeri,$sma_swasta,$smk_negeri,$smk_swasta,$slb_negeri,$slb_swasta);
		redirect('Operator');
	}

	function hapus_datasekolah() {
		$id_kecamatan=$this->input->post('id_kecamatan');
		$this->Operator_model->hapus_datasekolah($id_kecamatan);
		redirect('Operator');
	}
}