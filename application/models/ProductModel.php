<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

	public function list_product() {
		$this->db->select("user", "pass", "level_acess");

		$result = $this->db->get("colaborador")->result();

		return $result;
	}
}
