<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	function input_data($data, $table) {
		$this->db->insert($table,$data);
	}

	function check_username($username) {
		$this->db->select('*');
		$this->db->from('users_tbl');
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query;
	}

}