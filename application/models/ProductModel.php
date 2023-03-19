<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

	public function list_product() {
		$this->db->select('nome_produto');
		$this->db->select('fornecedor_produto');
		$this->db->select('ativo_inativo');

		$result = $this->db->get("produtos")->result();

		return $result;
	}


	public function insert_product($products) {
		// $data = array(
		// 	'nome_produto' => 'tv smart',
		// 	'fornecedor_produto' => 'LG',
		// 	'ativo_inativo' => 'ativo'
		// );

		 $this->db->insert('produtos', $products);
	}
}
