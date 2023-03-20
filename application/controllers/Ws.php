<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Ws extends CI_Controller {

	/**
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()	{
		
		$this->load->model("PedidosModel", "PedidosModel");
		$result = $this->PedidosModel->list_pedidos();
		$data   = array("PedidosModel" => $result);
		
		$this->load->view('wsView.php', $data);	

	}
}
