<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCadastroModel extends CI_Model {


	public function insert_user($user) {
		// $data = array(
		// 	'nome_produto' => 'tv smart',
		// 	'fornecedor_produto' => 'LG',
		// 	'ativo_inativo' => 'ativo'
		// );

		 $this->db->insert('colaborador', $user);		 
		 header("Location:index");
	}



}
