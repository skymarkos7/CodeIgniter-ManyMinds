<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()	{
		
		$this->load->view('dashboard/index.php');	

	}


	public function produtos()	{

		$this->load->model("ProductModel", "ProductModel");
		$result = $this->ProductModel->list_product();
		$data   = array("ProductModel" => $result);
		
		$this->load->view('dashboard/produtosView.php', $data);	

	}


	public function pedidos()	{

		$this->load->model("PedidosModel", "PedidosModel");
		$result = $this->PedidosModel->list_pedidos();
		$data   = array("PedidosModel" => $result);
		
		$this->load->view('dashboard/pedidosView.php', $data);	

	}


	public function usuario()	{
		
		$this->load->view('dashboard/usuarioView.php');	

	}

	public function fornecedor()	{

		$this->load->model("FornecedorModel", "FornecedorModel");
		$result = $this->FornecedorModel->list_fornecedor();
		$data   = array("FornecedorModel" => $result);
		
		$this->load->view('dashboard/fornecedorView.php', $data);	

	}


}
