<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function list_user($login) {
		$this->db->select("user");
		$this->db->select('pass');
		$this->db->select('level_acess');	
		$this->db->select('nome_colaborador');		
		$this->db->where('user', $login);

		$result = $this->db->get("colaborador")->result();

		return $result;
	}
}
