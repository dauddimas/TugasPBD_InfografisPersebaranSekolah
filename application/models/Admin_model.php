<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function show_operator(){
		$hasil=$this->db->query("SELECT * FROM users_tbl");
		return $hasil;
	}

	function tambah_operator($nama_operator,$username_operator,$password_operator,$level_operator){
		$hasil=$this->db->query("INSERT INTO users_tbl (nama,username,password,level) VALUES ('$nama_operator','$username_operator','$password_operator','$level_operator')");
		return $hasil;
	}

	function edit_operator($id_operator,$nama_operator,$username_operator,$password_operator,$level_operator){
		$hasil=$this->db->query("UPDATE users_tbl SET nama='$nama_operator',username='$username_operator',password='$password_operator',level='$level_operator' WHERE id='$id_operator'");
		return $hsl;
	}

	function hapus_operator($id_operator){
		$hasil=$this->db->query("DELETE FROM users_tbl WHERE id='$id_operator'");
		return $hasil;
	}

}