<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function list_user() {

		$this->db->select('user');
		$this->db->select('level_acess');
		$this->db->select('ativo_inativo');
		$this->db->select('nome_colaborador');		
		$this->db->select('data_cadastro');
		$this->db->select('cidade');
		$this->db->select('estado');
		$this->db->select('cep');
		$this->db->select('rua');

		$this->db->where('usuario_fornecedor', 'usuario');

		 $result = $this->db->get("colaborador")->result();

		return $result;
	}
}
