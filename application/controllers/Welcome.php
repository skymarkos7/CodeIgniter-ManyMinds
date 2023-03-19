<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        
        header("Location:index.php/login/index"); // leva o usuário até a página de login
        
    }
}
