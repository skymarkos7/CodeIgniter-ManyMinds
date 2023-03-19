<?php
	session_start();

	// if (!isset($_POST['id']) || empty($_POST['id']) == true) {
	// 	//header("Location:../login/index");
	// 	echo "ooooooooooooo";
	// }

	var_dump("ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo");
	
?>


<!doctype html>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Página principal do sistema">
    <meta name="msapplication-tap-highlight" content="no">
   
</head>


<body>

    <div id="menu_retratil" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button id="muda_botao" ; type="button" onclick="fechar_menu();"
                            class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">

                    <ul class="header-menu nav">
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a href="../login/index" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">

                                            
											
                                            <i style="color:red"> Sair</i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User
                                                Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">

                                    </div>
                                    <div class="widget-subheading">
                                        Administrador
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">

            <!---------------------------------------------------- todo o menu lateral  ------------------------------------------------->

            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading"></li>


                            <li class="app-sidebar__heading">Menu</li>
                           
                            <li>
                            <a href="pedidos">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-car">
                                        
                                    </i>
                                </i>
                                Pedidos
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            
                        </li>


                        <li>
                            <a >
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-diamond">                                        
                                    </i>
                                </i>
                                Colaborador
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="usuario">
                                        <i class="metismenu-icon"></i>
                                        Usuário                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="fornecedor">
                                        <i class="metismenu-icon">
                                        </i>Fornecedor
                                    </a>
                                </li>                        	
                        	</ul>
                        </li>

                        <li>
                            <a href="produtos">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-car">
                                        
                                    </i>
                                </i>
                                Produtos
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>                            
                        </li>                        
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <!--inicio - abrir e fechar o menu lateral do sistema ------>
                    <script>
                        function fechar_menu() {
                            const elemento1 = document.getElementById('menu_retratil');
                            const elemento2 = document.getElementById('muda_botao');

                            if (elemento1.classList) {
                                elemento1.classList.toggle('closed-sidebar');
                                elemento2.classList.toggle('is-active');
                            } else {
                                elemento1.className += (' closed-sidebar');
                                elemento2.className += (' is-active');
                            }
                        }
                    </script>
                    <!--Fim - abrir e fechar o menu lateral do sistema ------>

