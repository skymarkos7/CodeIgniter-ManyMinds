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
}
