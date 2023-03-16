<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()	{
		$this->load->model("LoginModel", "LoginModel");

		$result = $this->LoginModel->list_user();

		$data = array("LoginModel" => $result);

		$this->load->view('loginView', $data);	

	}



	public function cadastro() {
		
		$this->load->view("cadastroView");
		
	}



	public function list_array() {

		echo "list";

		$this->load->model("LoginModel", "LoginModel");

		$result = $this->LoginModel->list_user();

		echo '<pre>';

		var_dump($result);

		echo '<pre>';

	}


	public function list_table() {

		$this->load->model("LoginModel", "LoginModel");

		$result = $this->LoginModel->list_user();

		$dados = array("LoginModel" => $result);

		$this->load->view("lista_tabela_teste", $dados);

		//	$this->load->database();
	}
}
