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

	public function list_logs($ip) {
		$this->db->select("ip");
		$this->db->select('tentativas');
		$this->db->select('data');		
		$this->db->where('ip', $ip);

		$result = $this->db->get("logs")->result();

		return $result;
	}

	public function insert_logs($log) {
		// $data = array(
		// 	'nome_produto' => 'tv smart',
		// 	'fornecedor_produto' => 'LG',
		// 	'ativo_inativo' => 'ativo'
		// );

		$this->db->insert('logs', $log);		 
		//header("Location:produtos");
	}
}
