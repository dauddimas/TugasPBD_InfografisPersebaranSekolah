<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_model extends CI_Model {

	function show_datasekolah(){
		$hasil=$this->db->query("SELECT * FROM datasekolah_tbl");
		return $hasil;
	}

	function tambah_datasekolah($kecamatan,$sd_negeri,$sd_swasta,$smp_negeri,$smp_swasta,$sma_negeri,$sma_swasta,$smk_negeri,$smk_swasta,$slb_negeri,$slb_swasta){
		$hasil=$this->db->query("INSERT INTO datasekolah_tbl (kecamatan,sd_negeri,sd_swasta,smp_negeri,smp_swasta,sma_negeri,sma_swasta,smk_negeri,smk_swasta,slb_negeri,slb_swasta) VALUES ('$kecamatan','$sd_negeri','$sd_swasta','$smp_negeri','$smp_swasta','$sma_negeri','$sma_swasta','$smk_negeri','$smk_swasta','$slb_negeri','$slb_swasta')");
		return $hasil;
	}

	function edit_datasekolah($id_kecamatan,$kecamatan,$sd_negeri,$sd_swasta,$smp_negeri,$smp_swasta,$sma_negeri,$sma_swasta,$smk_negeri,$smk_swasta,$slb_negeri,$slb_swasta){
		$hasil=$this->db->query("UPDATE datasekolah_tbl SET kecamatan='$kecamatan',sd_negeri='$sd_negeri',sd_swasta='$sd_swasta',smp_negeri='$smp_negeri',smp_swasta='$smp_swasta',sma_negeri='$sma_negeri',sma_swasta='$sma_swasta',smk_negeri='$smk_negeri',smk_swasta='$smk_swasta',slb_negeri='$slb_negeri',slb_swasta='$slb_swasta' WHERE id_kecamatan='$id_kecamatan'");
		return $hsl;
	}

	function hapus_datasekolah($id_kecamatan){
		$hasil=$this->db->query("DELETE FROM datasekolah_tbl WHERE id_kecamatan='$id_kecamatan'");
		return $hasil;
	}

}