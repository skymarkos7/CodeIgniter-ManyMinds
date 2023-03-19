<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PedidosModel extends CI_Model {

	public function list_pedidos() {
		$this->db->select('fornecedor_produto');
		$this->db->select('observacao');		
		$this->db->select('ativo_finalizado');
		$this->db->select('quantidade');
		$this->db->select('preco_unitario');

		$result = $this->db->get("pedidos")->result();

		return $result;
	}

	public function insert_pedidos($pedidos) {
		// $data = array(
		// 	'nome_produto' => 'tv smart',
		// 	'fornecedor_produto' => 'LG',
		// 	'ativo_inativo' => 'ativo'
		// );

		 $this->db->insert('pedidos', $pedidos);		 
		 header("Location:pedidos");
	}
}
