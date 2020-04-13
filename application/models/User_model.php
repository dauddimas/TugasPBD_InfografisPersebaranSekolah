<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function show_datasekolah(){
		$hasil=$this->db->query("SELECT * FROM datasekolah_tbl");
		return $hasil;
	}

}