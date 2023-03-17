<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		
		session_start(); //inicia uma sessão

		if(isset($_SESSION['id']) && empty($_SESSION['id']) == false)   {  //verifica se já foi feito login recentemente e mostra o html a baixo "pagina principal do site"

		//inicio do site
			echo " 

			<!DOCTYPE html>
			<html>
			<head>
				<title>Marcola</title>
			</head>
			<body>
				
				<div>site aqui</div>

			</body>
			</html>

			";		

} else {

	header("Location:index.php/login/index"); // leva o usuário até a página de login caso ele não esteja logado

}



		
	}
}
