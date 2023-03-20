<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Welcome extends CI_Controller
{
    public function index()
    {
        session_destroy(); 
		session_start();
		$_SESSION['tentativas'] = 3;
		$this->load->model("LogsModel", "LogsModel");
		$result = $this->LogsModel->truncate_logs();
        header("Location:index.php/login/index"); // leva o usuário até a página de login

        
    }
}
