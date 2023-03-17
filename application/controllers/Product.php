<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()	{
		$this->load->model("ProductModel", "ProductModel");

		$result = $this->ProductModel->list_product();
		$data   = array("ProductModel" => $result);

		$this->load->view('products/productView', $data);	

	}


}
