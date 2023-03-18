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
}
