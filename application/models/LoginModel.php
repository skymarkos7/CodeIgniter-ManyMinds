<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function list_user() {
		$this->db->select("user", "pass", "level");

		$result = $this->db->get("login")->result();

		return $result;
	}
}
