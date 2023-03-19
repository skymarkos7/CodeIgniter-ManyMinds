<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FornecedorModel extends CI_Model {

	public function list_fornecedor() {

		$this->db->select('ativo_inativo');
		$this->db->select('nome_colaborador');		
		$this->db->select('data_cadastro');
		$this->db->select('cidade');
		$this->db->select('estado');
		$this->db->select('cep');
		$this->db->select('rua');

		$this->db->where('usuario_fornecedor', 'fornecedor');

		 $result = $this->db->get("colaborador")->result();

		return $result;
	}


	public function insert_fornecedor($fornecedor) {
		// $data = array(
		// 	'nome_produto' => 'tv smart',
		// 	'fornecedor_produto' => 'LG',
		// 	'ativo_inativo' => 'ativo'
		// );

		 $this->db->insert('colaborador', $fornecedor);		 
		 header("Location:fornecedor");
	}
}
