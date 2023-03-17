<!doctype html>
<html lang="pt-br">

<head>
    <!-- PARA BARRA DE PESQUISA --------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Painel de Controle</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Página principal do sistema">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" type="image/jpg" href="img/m.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../estilo/componentes.css" rel="stylesheet"> <!-- para estilizar os demais componentes -->
    <link href="../estilo/main.css" rel="stylesheet"> <!-- estilização da página padrão -->
    <link href="estilo/main.css" rel="stylesheet"> <!-- estilização da página padrão -->



</head>

<body>

    <!----------------------------------- topo da página, contendo todo o cabeçalho ------------------------------------->



    <div id="menu_retratil" ; class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
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

                    <!--aqui ficava o botão de pesquisar -->



                    <!-- fim do pesquisar ----->

                    <ul class="header-menu nav">
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <!----- imagem de Login ---->
                                            <img width="42" class="rounded-circle" src="../img/m.png" alt="">

                                            <i> ⌵</i>
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


                            <li class="app-sidebar__heading">Funções</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond">
                                        <i class="metismenu-icon pe-7s-diamond">
                                            <img src="../img/icone/arrow-up-circle-outline.png" alt="">
                                        </i>
                                    </i>
                                    Entrada
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                
                        </li>
                        <li>
                            <a href="../paginas/mostrar_produtos.php">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-diamond">
                                        <img src="../img/icone/arrow-down-circle-outline.png" alt="">
                                    </i>
                                </i>
                                Saída
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>

                                <li>
                                    <a href="nova_saida.php">
                                        <i class="metismenu-icon"></i>
                                        Novo
                                        <img src="../img/icone/minus-circle-outline.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-badges-labels.html">
                                        <i class="metismenu-icon">
                                        </i>comprar
                                    </a>
                                </li>

                        </li>
                        </ul>
                        </li>
                        <li>
                            <a href="..\paginas\mostrar_cliente.php">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-car">
                                        <img src="../img/icone/barcode.png" alt="">
                                    </i>
                                </i>
                                Estoque
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="../paginas/cadastrar_cliente.php">
                                        <i class="metismenu-icon">
                                        </i>Estoque mínimo
                                    </a>
                                </li>
                                <li>
                                    <a href="components-maps.html">
                                        <i class="metismenu-icon">
                                        </i>Estatísticas
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../paginas/mostrar_usuarios.php">
                                <i class="metismenu-icon pe-7s-diamond">
                                    <i class="metismenu-icon pe-7s-car">
                                        <img src="../img/icone/puzzle-plus.png" alt="">
                                    </i>
                                </i>
                                Cadastrar
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="../paginas/cadastrar_cliente.php">
                                        <i class="metismenu-icon">
                                        </i>Usuário
                                    </a>
                                </li>
                                <li>
                                    <a href="../paginas/cadastrar_cliente.php">
                                        <i class="metismenu-icon">
                                        </i>Cliente
                                    </a>
                                </li>
                                <li>
                                    <a href="../paginas/cadastrar_cliente.php">
                                        <i class="metismenu-icon">
                                        </i>Produto
                                    </a>
                                </li>
                            </ul>
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

                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="https://www.facebook.com/654.asd.gfwfw/" class="nav-link">
                                            Copyright© 2020 - Marcos Lourenço de Souza
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="https://wa.me/5582996909200" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>whatsapp</small>
                                            </div>
                                            (82) 99690-9200
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</body>

</html>






<style>
    /*!
 =========================================================
 * ArchitectUI HTML Theme Dashboard - v1.0.0
 =========================================================
 * Product Page: https://dashboardpack.com
 * Copyright 2019 DashboardPack (https://dashboardpack.com)
 * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
 =========================================================
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */

.border-primary {
    border-color: #3f6ad8;
}

.border-secondary {
    border-color: #6c757d;
}

.border-success {
    border-color: #3ac47d;
}

.border-info {
    border-color: #16aaff;
}

.border-warning {
    border-color: #f7b924;
}

.border-danger {
    border-color: #d92550;
}

.border-light {
    border-color: #eee;
}

.border-dark {
    border-color: #343a40;
}

.border-focus {
    border-color: #444054;
}

.border-alternate {
    border-color: #794c8a;
}

.list-group-item-primary {
    color: #213770;
    background-color: #c9d5f4;
}

.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
    color: #213770;
    background-color: #b4c5f0;
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #213770;
    border-color: #213770;
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41;
}

.list-group-item-success {
    color: #1e6641;
    background-color: #c8eedb;
}

.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
    color: #1e6641;
    background-color: #b5e8ce;
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #1e6641;
    border-color: #1e6641;
}

.list-group-item-info {
    color: #0b5885;
    background-color: #bee7ff;
}

.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
    color: #0b5885;
    background-color: #a5deff;
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0b5885;
    border-color: #0b5885;
}

.list-group-item-warning {
    color: #806013;
    background-color: #fdebc2;
}

.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
    color: #806013;
    background-color: #fce3a9;
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #806013;
    border-color: #806013;
}

.list-group-item-danger {
    color: #71132a;
    background-color: #f4c2ce;
}

.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
    color: #71132a;
    background-color: #f0acbd;
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #71132a;
    border-color: #71132a;
}

.list-group-item-light {
    color: #7c7c7c;
    background-color: #fafafa;
}

.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
    color: #7c7c7c;
    background-color: #ededed;
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #7c7c7c;
    border-color: #7c7c7c;
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21;
}

.list-group-item-focus {
    color: #23212c;
    background-color: #cbcacf;
}

.list-group-item-focus.list-group-item-action:hover,
.list-group-item-focus.list-group-item-action:focus {
    color: #23212c;
    background-color: #bebdc3;
}

.list-group-item-focus.list-group-item-action.active {
    color: #fff;
    background-color: #23212c;
    border-color: #23212c;
}

.list-group-item-alternate {
    color: #3f2848;
    background-color: #d9cdde;
}

.list-group-item-alternate.list-group-item-action:hover,
.list-group-item-alternate.list-group-item-action:focus {
    color: #3f2848;
    background-color: #cdbed4;
}

.list-group-item-alternate.list-group-item-action.active {
    color: #fff;
    background-color: #3f2848;
    border-color: #3f2848;
}

.bg-primary {
    background-color: #3f6ad8 !important;
}

a.bg-primary:hover,
a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
    background-color: #2651be !important;
}

.bg-secondary {
    background-color: #6c757d !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
    background-color: #545b62 !important;
}

.bg-success {
    background-color: #3ac47d !important;
}

a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
    background-color: #2e9d64 !important;
}

.bg-info {
    background-color: #16aaff !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
    background-color: #0090e2 !important;
}

.bg-warning {
    background-color: #f7b924 !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #e0a008 !important;
}

.bg-danger {
    background-color: #d92550 !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #ad1e40 !important;
}

.bg-light {
    background-color: #eee !important;
}

a.bg-light:hover,
a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
    background-color: #d5d5d5 !important;
}

.bg-dark {
    background-color: #343a40 !important;
}

a.bg-dark:hover,
a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
    background-color: #1d2124 !important;
}

.bg-focus {
    background-color: #444054 !important;
}

a.bg-focus:hover,
a.bg-focus:focus,
button.bg-focus:hover,
button.bg-focus:focus {
    background-color: #2d2a37 !important;
}

.bg-alternate {
    background-color: #794c8a !important;
}

a.bg-alternate:hover,
a.bg-alternate:focus,
button.bg-alternate:hover,
button.bg-alternate:focus {
    background-color: #5c3a69 !important;
}

:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #3f6ad8;
    --secondary: #6c757d;
    --success: #3ac47d;
    --info: #16aaff;
    --warning: #f7b924;
    --danger: #d92550;
    --light: #eee;
    --dark: #343a40;
    --focus: #444054;
    --alternate: #794c8a;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block;
}


/*-- Muda o tamanho das letras de todo o site , fonte letras --*/

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.78rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: left;
    background-color: #fff;
}

[tabindex="-1"]:focus {
    outline: 0 !important;
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
    text-decoration: underline;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    text-decoration-skip-ink: none;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: 0.5rem;
    margin-left: 0;
}

blockquote {
    margin: 0 0 1rem;
}

b,
strong {
    font-weight: bolder;
}

small {
    font-size: 80%;
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}

a {
    color: #3f6ad8;
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    color: #0056b3;
    text-decoration: underline;
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
    outline: 0;
}

pre,
code,
kbd,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-size: 1em;
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
}

figure {
    margin: 0 0 1rem;
}

img {
    vertical-align: middle;
    border-style: none;
}

svg {
    overflow: hidden;
    vertical-align: middle;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 0.55rem;
    padding-bottom: 0.55rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom;
}

th {
    text-align: inherit;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
input {
    overflow: visible;
}

button,
select {
    text-transform: none;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
    -webkit-appearance: listbox;
}

textarea {
    overflow: auto;
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}

progress {
    vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

output {
    display: inline-block;
}

summary {
    display: list-item;
    cursor: pointer;
}

template {
    display: none;
}

[hidden] {
    display: none !important;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 400;
    line-height: 1.2;
    color: inherit;
}

h1,
.h1 {
    font-size: 2.5rem;
}

h2,
.h2 {
    font-size: 2rem;
}

h3,
.h3 {
    font-size: 1.75rem;
}

h4,
.h4 {
    font-size: 1.5rem;
}

h5,
.h5 {
    font-size: 1.25rem;
}

h6,
.h6 {
    font-size: 1rem;
}

.lead {
    font-size: 1.25rem;
    font-weight: 300;
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2;
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
    font-size: 80%;
    font-weight: 400;
}

mark,
.mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}



@media (min-width: 1200px) {
    .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }
    .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }
    .col-xl-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }
    .col-xl-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
    .col-xl-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }
    .col-xl-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }
    .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .col-xl-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }
    .col-xl-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }
    .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }
    .col-xl-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }
    .col-xl-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }
    .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .order-xl-first {
        order: -1;
    }
    .order-xl-last {
        order: 13;
    }
    .order-xl-0 {
        order: 0;
    }
    .order-xl-1 {
        order: 1;
    }
    .order-xl-2 {
        order: 2;
    }
    .order-xl-3 {
        order: 3;
    }
    .order-xl-4 {
        order: 4;
    }
   
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: rgba(0, 0, 0, 0);
}

.table th,
.table td {
    padding: 0.55rem;
    vertical-align: top;
    border-top: 1px solid #e9ecef;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e9ecef;
}

.table tbody+tbody {
    border-top: 2px solid #e9ecef;
}

.table .table {
    background-color: #fff;
}

.table-sm th,
.table-sm td {
    padding: 0.3rem;
}

.table-bordered {
    border: 1px solid #e9ecef;
}

.table-bordered th,
.table-bordered td {
    border: 1px solid #e9ecef;
}

.table-bordered thead th,
.table-bordered thead td {
    border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody+tbody {
    border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.03);
}

.table-hover tbody tr:hover {
    background-color: #e0f3ff;
}

.table-primary,
.table-primary>th,
.table-primary>td {
    background-color: #c9d5f4;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody+tbody {
    border-color: #9bb2eb;
}

.table-hover .table-primary:hover {
    background-color: #b4c5f0;
}

.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
    background-color: #b4c5f0;
}

.table-secondary,
.table-secondary>th,
.table-secondary>td {
    background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody+tbody {
    border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
    background-color: #c8cbcf;
}

.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
    background-color: #c8cbcf;
}

.table-success,
.table-success>th,
.table-success>td {
    background-color: #c8eedb;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody+tbody {
    border-color: #99e0bb;
}

.table-hover .table-success:hover {
    background-color: #b5e8ce;
}

.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
    background-color: #b5e8ce;
}

.table-info,
.table-info>th,
.table-info>td {
    background-color: #bee7ff;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody+tbody {
    border-color: #86d3ff;
}

.table-hover .table-info:hover {
    background-color: #a5deff;
}

.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
    background-color: #a5deff;
}

.table-warning,
.table-warning>th,
.table-warning>td {
    background-color: #fdebc2;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody+tbody {
    border-color: #fbdb8d;
}

.table-hover .table-warning:hover {
    background-color: #fce3a9;
}

.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
    background-color: #fce3a9;
}

.table-danger,
.table-danger>th,
.table-danger>td {
    background-color: #f4c2ce;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody+tbody {
    border-color: #eb8ea4;
}

.table-hover .table-danger:hover {
    background-color: #f0acbd;
}

.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
    background-color: #f0acbd;
}

.table-light,
.table-light>th,
.table-light>td {
    background-color: #fafafa;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody+tbody {
    border-color: #f6f6f6;
}

.table-hover .table-light:hover {
    background-color: #ededed;
}

.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
    background-color: #ededed;
}

.table-dark,
.table-dark>th,
.table-dark>td {
    background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody+tbody {
    border-color: #95999c;
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe;
}

.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
    background-color: #b9bbbe;
}

.table-focus,
.table-focus>th,
.table-focus>td {
    background-color: #cbcacf;
}

.table-focus th,
.table-focus td,
.table-focus thead th,
.table-focus tbody+tbody {
    border-color: #9e9ca6;
}

.table-hover .table-focus:hover {
    background-color: #bebdc3;
}

.table-hover .table-focus:hover>td,
.table-hover .table-focus:hover>th {
    background-color: #bebdc3;
}

.table-alternate,
.table-alternate>th,
.table-alternate>td {
    background-color: #d9cdde;
}

.table-alternate th,
.table-alternate td,
.table-alternate thead th,
.table-alternate tbody+tbody {
    border-color: #b9a2c2;
}

.table-hover .table-alternate:hover {
    background-color: #cdbed4;
}

.table-hover .table-alternate:hover>td,
.table-hover .table-alternate:hover>th {
    background-color: #cdbed4;
}

.table-active,
.table-active>th,
.table-active>td {
    background-color: #e0f3ff;
}

.table-hover .table-active:hover {
    background-color: #c7e9ff;
}

.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
    background-color: #c7e9ff;
}

.table .thead-dark th {
    color: #fff;
    background-color: #212529;
    border-color: #32383e;
}

.table .thead-light th {
    color: #6c757d;
    background-color: #f8f9fa;
    border-color: #e9ecef;
}

.table-dark {
    color: #fff;
    background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #32383e;
}

.table-dark.table-bordered {
    border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-sm>.table-bordered {
        border: 0;
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-md>.table-bordered {
        border: 0;
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-lg>.table-bordered {
        border: 0;
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-xl>.table-bordered {
        border: 0;
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive>.table-bordered {
    border: 0;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media screen and (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #a9bcee;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::placeholder {
    color: #6c757d;
    opacity: 1;
}

.form-control:disabled,
.form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1;
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
    line-height: 1.5;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
    margin-bottom: 0;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}

.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    height: calc(1.8125rem + 2px);
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.form-control-lg {
    height: calc(2.875rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

select.form-control[size],
select.form-control[multiple] {
    height: auto;
}

textarea.form-control {
    height: auto;
}

.form-group {
    margin-bottom: 1rem;
}

.form-text {
    display: block;
    margin-top: 0.25rem;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.form-row>.col,
.form-row>[class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}

.form-check-input:disabled~.form-check-label {
    color: #6c757d;
}

.form-check-label {
    margin-bottom: 0;
}

.form-check-inline {
    display: inline-flex;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #3ac47d;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(58, 196, 125, 0.9);
    border-radius: 0.25rem;
}

.was-validated .form-control:valid,
.form-control.is-valid {
    border-color: #3ac47d;
    padding-right: 2.25rem;
    background-repeat: no-repeat;
    background-position: center right calc(2.25rem / 4);
    background-size: calc(2.25rem / 2) calc(2.25rem / 2);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
}

.was-validated .form-control:valid:focus,
.form-control.is-valid:focus {
    border-color: #3ac47d;
    box-shadow: 0 0 0 0.2rem rgba(58, 196, 125, 0.25);
}

.was-validated .form-control:valid~.valid-feedback,
.was-validated .form-control:valid~.valid-tooltip,
.form-control.is-valid~.valid-feedback,
.form-control.is-valid~.valid-tooltip {
    display: block;
}

.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
    padding-right: 2.25rem;
    background-position: top calc(2.25rem / 4) right calc(2.25rem / 4);
}

.was-validated .custom-select:valid,
.custom-select.is-valid {
    border-color: #3ac47d;
    padding-right: 3.4375rem;
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") no-repeat center right 1.75rem/1.125rem 1.125rem;
}

.was-validated .custom-select:valid:focus,
.custom-select.is-valid:focus {
    border-color: #3ac47d;
    box-shadow: 0 0 0 0.2rem rgba(58, 196, 125, 0.25);
}

.was-validated .custom-select:valid~.valid-feedback,
.was-validated .custom-select:valid~.valid-tooltip,
.custom-select.is-valid~.valid-feedback,
.custom-select.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .form-control-file:valid~.valid-feedback,
.was-validated .form-control-file:valid~.valid-tooltip,
.form-control-file.is-valid~.valid-feedback,
.form-control-file.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .form-check-input:valid~.form-check-label,
.form-check-input.is-valid~.form-check-label {
    color: #3ac47d;
}

.was-validated .form-check-input:valid~.valid-feedback,
.was-validated .form-check-input:valid~.valid-tooltip,
.form-check-input.is-valid~.valid-feedback,
.form-check-input.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid~.custom-control-label,
.custom-control-input.is-valid~.custom-control-label {
    color: #3ac47d;
}

.was-validated .custom-control-input:valid~.custom-control-label::before,
.custom-control-input.is-valid~.custom-control-label::before {
    border-color: #3ac47d;
}

.was-validated .custom-control-input:valid~.valid-feedback,
.was-validated .custom-control-input:valid~.valid-tooltip,
.custom-control-input.is-valid~.valid-feedback,
.custom-control-input.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid:checked~.custom-control-label::before,
.custom-control-input.is-valid:checked~.custom-control-label::before {
    border-color: #61d097;
    background-color: #61d097;
}

.was-validated .custom-control-input:valid:focus~.custom-control-label::before,
.custom-control-input.is-valid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(58, 196, 125, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
    border-color: #3ac47d;
}

.was-validated .custom-file-input:valid~.custom-file-label,
.custom-file-input.is-valid~.custom-file-label {
    border-color: #3ac47d;
}

.was-validated .custom-file-input:valid~.valid-feedback,
.was-validated .custom-file-input:valid~.valid-tooltip,
.custom-file-input.is-valid~.valid-feedback,
.custom-file-input.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .custom-file-input:valid:focus~.custom-file-label,
.custom-file-input.is-valid:focus~.custom-file-label {
    border-color: #3ac47d;
    box-shadow: 0 0 0 0.2rem rgba(58, 196, 125, 0.25);
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #d92550;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: 0.25rem 0.5rem;
    margin-top: 0.1rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(217, 37, 80, 0.9);
    border-radius: 0.25rem;
}

.was-validated .form-control:invalid,
.form-control.is-invalid {
    border-color: #d92550;
    padding-right: 2.25rem;
    background-repeat: no-repeat;
    background-position: center right calc(2.25rem / 4);
    background-size: calc(2.25rem / 2) calc(2.25rem / 2);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
}

.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus {
    border-color: #d92550;
    box-shadow: 0 0 0 0.2rem rgba(217, 37, 80, 0.25);
}

.was-validated .form-control:invalid~.invalid-feedback,
.was-validated .form-control:invalid~.invalid-tooltip,
.form-control.is-invalid~.invalid-feedback,
.form-control.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
    padding-right: 2.25rem;
    background-position: top calc(2.25rem / 4) right calc(2.25rem / 4);
}

.was-validated .custom-select:invalid,
.custom-select.is-invalid {
    border-color: #d92550;
    padding-right: 3.4375rem;
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") no-repeat center right 1.75rem/1.125rem 1.125rem;
}

.was-validated .custom-select:invalid:focus,
.custom-select.is-invalid:focus {
    border-color: #d92550;
    box-shadow: 0 0 0 0.2rem rgba(217, 37, 80, 0.25);
}

.was-validated .custom-select:invalid~.invalid-feedback,
.was-validated .custom-select:invalid~.invalid-tooltip,
.custom-select.is-invalid~.invalid-feedback,
.custom-select.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .form-control-file:invalid~.invalid-feedback,
.was-validated .form-control-file:invalid~.invalid-tooltip,
.form-control-file.is-invalid~.invalid-feedback,
.form-control-file.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .form-check-input:invalid~.form-check-label,
.form-check-input.is-invalid~.form-check-label {
    color: #d92550;
}

.was-validated .form-check-input:invalid~.invalid-feedback,
.was-validated .form-check-input:invalid~.invalid-tooltip,
.form-check-input.is-invalid~.invalid-feedback,
.form-check-input.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid~.custom-control-label,
.custom-control-input.is-invalid~.custom-control-label {
    color: #d92550;
}

.was-validated .custom-control-input:invalid~.custom-control-label::before,
.custom-control-input.is-invalid~.custom-control-label::before {
    border-color: #d92550;
}

.was-validated .custom-control-input:invalid~.invalid-feedback,
.was-validated .custom-control-input:invalid~.invalid-tooltip,
.custom-control-input.is-invalid~.invalid-feedback,
.custom-control-input.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
.custom-control-input.is-invalid:checked~.custom-control-label::before {
    border-color: #e15073;
    background-color: #e15073;
}

.was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
.custom-control-input.is-invalid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(217, 37, 80, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
    border-color: #d92550;
}

.was-validated .custom-file-input:invalid~.custom-file-label,
.custom-file-input.is-invalid~.custom-file-label {
    border-color: #d92550;
}

.was-validated .custom-file-input:invalid~.invalid-feedback,
.was-validated .custom-file-input:invalid~.invalid-tooltip,
.custom-file-input.is-invalid~.invalid-feedback,
.custom-file-input.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .custom-file-input:invalid:focus~.custom-file-label,
.custom-file-input.is-invalid:focus~.custom-file-label {
    border-color: #d92550;
    box-shadow: 0 0 0 0.2rem rgba(217, 37, 80, 0.25);
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.form-inline .form-check {
    width: 100%;
}

@media (min-width: 576px) {
    .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
    }
    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
    }
    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }
    .form-inline .form-control-plaintext {
        display: inline-block;
    }
    .form-inline .input-group,
    .form-inline .custom-select {
        width: auto;
    }
    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }
    .form-inline .form-check-input {
        position: relative;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }
    .form-inline .custom-control {
        align-items: center;
        justify-content: center;
    }
    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #495057;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
}

@media screen and (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}

.btn:hover {
    color: #495057;
    text-decoration: none;
}

.btn:focus,
.btn.focus {
    outline: 0;
    box-shadow: none;
}

.btn.disabled,
.btn:disabled {
    opacity: 0.65;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}

.btn-primary {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-primary:hover {
    color: #fff;
    background-color: #2955c8;
    border-color: #2651be;
}

.btn-primary:focus,
.btn-primary.focus {
    box-shadow: 0 0 0 0 rgba(92, 128, 222, 0.5);
}

.btn-primary.disabled,
.btn-primary:disabled {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #2651be;
    border-color: #244cb3;
}

.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.show>.btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(92, 128, 222, 0.5);
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62;
}

.btn-secondary:focus,
.btn-secondary.focus {
    box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
}

.btn-secondary.disabled,
.btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus,
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.show>.btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(130, 138, 145, 0.5);
}

.btn-success {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}

.btn-success:hover {
    color: #fff;
    background-color: #31a66a;
    border-color: #2e9d64;
}

.btn-success:focus,
.btn-success.focus {
    box-shadow: 0 0 0 0 rgba(88, 205, 145, 0.5);
}

.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}

.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #2e9d64;
    border-color: #2b935e;
}

.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus,
.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(88, 205, 145, 0.5);
}

.btn-info {
    color: #fff;
    background-color: #16aaff;
    border-color: #16aaff;
}

.btn-info:hover {
    color: #fff;
    background-color: #0098ef;
    border-color: #0090e2;
}

.btn-info:focus,
.btn-info.focus {
    box-shadow: 0 0 0 0 rgba(57, 183, 255, 0.5);
}

.btn-info.disabled,
.btn-info:disabled {
    color: #fff;
    background-color: #16aaff;
    border-color: #16aaff;
}

.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active,
.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #0090e2;
    border-color: #0087d5;
}

.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus,
.show>.btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(57, 183, 255, 0.5);
}

.btn-warning {
    color: #212529;
    background-color: #f7b924;
    border-color: #f7b924;
}

.btn-warning:hover {
    color: #212529;
    background-color: #eca909;
    border-color: #e0a008;
}

.btn-warning:focus,
.btn-warning.focus {
    box-shadow: 0 0 0 0 rgba(215, 163, 37, 0.5);
}

.btn-warning.disabled,
.btn-warning:disabled {
    color: #212529;
    background-color: #f7b924;
    border-color: #f7b924;
}

.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active,
.show>.btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #e0a008;
    border-color: #d49808;
}

.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus,
.show>.btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(215, 163, 37, 0.5);
}

.btn-danger {
    color: #fff;
    background-color: #d92550;
    border-color: #d92550;
}

.btn-danger:hover {
    color: #fff;
    background-color: #b81f44;
    border-color: #ad1e40;
}

.btn-danger:focus,
.btn-danger.focus {
    box-shadow: 0 0 0 0 rgba(223, 70, 106, 0.5);
}

.btn-danger.disabled,
.btn-danger:disabled {
    color: #fff;
    background-color: #d92550;
    border-color: #d92550;
}

.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active,
.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #ad1e40;
    border-color: #a31c3c;
}

.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus,
.show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(223, 70, 106, 0.5);
}

.btn-light {
    color: #212529;
    background-color: #eee;
    border-color: #eee;
}

.btn-light:hover {
    color: #212529;
    background-color: #dbdbdb;
    border-color: #d5d5d5;
}

.btn-light:focus,
.btn-light.focus {
    box-shadow: 0 0 0 0 rgba(207, 208, 208, 0.5);
}

.btn-light.disabled,
.btn-light:disabled {
    color: #212529;
    background-color: #eee;
    border-color: #eee;
}

.btn-light:not(:disabled):not(.disabled):active,
.btn-light:not(:disabled):not(.disabled).active,
.show>.btn-light.dropdown-toggle {
    color: #212529;
    background-color: #d5d5d5;
    border-color: #cecece;
}

.btn-light:not(:disabled):not(.disabled):active:focus,
.btn-light:not(:disabled):not(.disabled).active:focus,
.show>.btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(207, 208, 208, 0.5);
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
}

.btn-dark:focus,
.btn-dark.focus {
    box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
}

.btn-dark.disabled,
.btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active,
.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus,
.btn-dark:not(:disabled):not(.disabled).active:focus,
.show>.btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(82, 88, 93, 0.5);
}

.btn-focus {
    color: #fff;
    background-color: #444054;
    border-color: #444054;
}

.btn-focus:hover {
    color: #fff;
    background-color: #322f3e;
    border-color: #2d2a37;
}

.btn-focus:focus,
.btn-focus.focus {
    box-shadow: 0 0 0 0 rgba(96, 93, 110, 0.5);
}

.btn-focus.disabled,
.btn-focus:disabled {
    color: #fff;
    background-color: #444054;
    border-color: #444054;
}

.btn-focus:not(:disabled):not(.disabled):active,
.btn-focus:not(:disabled):not(.disabled).active,
.show>.btn-focus.dropdown-toggle {
    color: #fff;
    background-color: #2d2a37;
    border-color: #272430;
}

.btn-focus:not(:disabled):not(.disabled):active:focus,
.btn-focus:not(:disabled):not(.disabled).active:focus,
.show>.btn-focus.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(96, 93, 110, 0.5);
}

.btn-alternate {
    color: #fff;
    background-color: #794c8a;
    border-color: #794c8a;
}

.btn-alternate:hover {
    color: #fff;
    background-color: #633e71;
    border-color: #5c3a69;
}

.btn-alternate:focus,
.btn-alternate.focus {
    box-shadow: 0 0 0 0 rgba(141, 103, 156, 0.5);
}

.btn-alternate.disabled,
.btn-alternate:disabled {
    color: #fff;
    background-color: #794c8a;
    border-color: #794c8a;
}

.btn-alternate:not(:disabled):not(.disabled):active,
.btn-alternate:not(:disabled):not(.disabled).active,
.show>.btn-alternate.dropdown-toggle {
    color: #fff;
    background-color: #5c3a69;
    border-color: #553561;
}

.btn-alternate:not(:disabled):not(.disabled):active:focus,
.btn-alternate:not(:disabled):not(.disabled).active:focus,
.show>.btn-alternate.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(141, 103, 156, 0.5);
}

.btn-outline-primary {
    color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-outline-primary:focus,
.btn-outline-primary.focus {
    box-shadow: 0 0 0 0 rgba(63, 106, 216, 0.5);
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: #3f6ad8;
    background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(63, 106, 216, 0.5);
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:focus,
.btn-outline-secondary.focus {
    box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active,
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
    color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:focus,
.btn-outline-success.focus {
    box-shadow: 0 0 0 0 rgba(58, 196, 125, 0.5);
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #3ac47d;
    background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active,
.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(58, 196, 125, 0.5);
}

.btn-outline-info {
    color: #16aaff;
    border-color: #16aaff;
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #16aaff;
    border-color: #16aaff;
}

.btn-outline-info:focus,
.btn-outline-info.focus {
    box-shadow: 0 0 0 0 rgba(22, 170, 255, 0.5);
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #16aaff;
    background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active,
.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #16aaff;
    border-color: #16aaff;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(22, 170, 255, 0.5);
}

.btn-outline-warning {
    color: #f7b924;
    border-color: #f7b924;
}

.btn-outline-warning:hover {
    color: #212529;
    background-color: #f7b924;
    border-color: #f7b924;
}

.btn-outline-warning:focus,
.btn-outline-warning.focus {
    box-shadow: 0 0 0 0 rgba(247, 185, 36, 0.5);
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #f7b924;
    background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active,
.show>.btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #f7b924;
    border-color: #f7b924;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(247, 185, 36, 0.5);
}

.btn-outline-danger {
    color: #d92550;
    border-color: #d92550;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #d92550;
    border-color: #d92550;
}

.btn-outline-danger:focus,
.btn-outline-danger.focus {
    box-shadow: 0 0 0 0 rgba(217, 37, 80, 0.5);
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #d92550;
    background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active,
.show>.btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #d92550;
    border-color: #d92550;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(217, 37, 80, 0.5);
}

.btn-outline-light {
    color: #eee;
    border-color: #eee;
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #eee;
    border-color: #eee;
}

.btn-outline-light:focus,
.btn-outline-light.focus {
    box-shadow: 0 0 0 0 rgba(238, 238, 238, 0.5);
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #eee;
    background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active,
.show>.btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #eee;
    border-color: #eee;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(238, 238, 238, 0.5);
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:focus,
.btn-outline-dark.focus {
    box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active,
.show>.btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(52, 58, 64, 0.5);
}

.btn-outline-focus {
    color: #444054;
    border-color: #444054;
}

.btn-outline-focus:hover {
    color: #fff;
    background-color: #444054;
    border-color: #444054;
}

.btn-outline-focus:focus,
.btn-outline-focus.focus {
    box-shadow: 0 0 0 0 rgba(68, 64, 84, 0.5);
}

.btn-outline-focus.disabled,
.btn-outline-focus:disabled {
    color: #444054;
    background-color: transparent;
}

.btn-outline-focus:not(:disabled):not(.disabled):active,
.btn-outline-focus:not(:disabled):not(.disabled).active,
.show>.btn-outline-focus.dropdown-toggle {
    color: #fff;
    background-color: #444054;
    border-color: #444054;
}

.btn-outline-focus:not(:disabled):not(.disabled):active:focus,
.btn-outline-focus:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-focus.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(68, 64, 84, 0.5);
}

.btn-outline-alternate {
    color: #794c8a;
    border-color: #794c8a;
}

.btn-outline-alternate:hover {
    color: #fff;
    background-color: #794c8a;
    border-color: #794c8a;
}

.btn-outline-alternate:focus,
.btn-outline-alternate.focus {
    box-shadow: 0 0 0 0 rgba(121, 76, 138, 0.5);
}

.btn-outline-alternate.disabled,
.btn-outline-alternate:disabled {
    color: #794c8a;
    background-color: transparent;
}

.btn-outline-alternate:not(:disabled):not(.disabled):active,
.btn-outline-alternate:not(:disabled):not(.disabled).active,
.show>.btn-outline-alternate.dropdown-toggle {
    color: #fff;
    background-color: #794c8a;
    border-color: #794c8a;
}

.btn-outline-alternate:not(:disabled):not(.disabled):active:focus,
.btn-outline-alternate:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-alternate.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(121, 76, 138, 0.5);
}

.btn-link {
    font-weight: 400;
    color: #3f6ad8;
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline;
}

.btn-link:focus,
.btn-link.focus {
    text-decoration: underline;
    box-shadow: none;
}

.btn-link:disabled,
.btn-link.disabled {
    color: #6c757d;
    pointer-events: none;
}

.btn-lg,
.btn-group-lg>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

.btn-sm,
.btn-group-sm>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-block+.btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%;
}

.fade {
    transition: opacity 0.15s linear;
}

@media screen and (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}

.fade:not(.show) {
    opacity: 0;
}

.collapse:not(.show) {
    display: none;
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
    position: relative;
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 15rem;
    padding: 0.65rem 0;
    margin: 0.125rem 0 0;
    font-size: 0.88rem;
    color: #495057;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-right {
        right: 0;
        left: auto;
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-right {
        right: 0;
        left: auto;
    }
}

.dropdown-menu-left {
    right: auto;
    left: 0;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right: auto;
        left: 0;
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right: auto;
        left: 0;
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right: auto;
        left: 0;
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right: auto;
        left: 0;
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-toggle::after {
    vertical-align: 0;
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
}

.dropleft .dropdown-toggle::after {
    display: none;
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0;
}

.dropdown-menu[x-placement^="top"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"] {
    right: auto;
    bottom: auto;
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.4rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.dropdown-item:first-child {
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}

.dropdown-item:last-child {
    border-bottom-right-radius: calc(0.25rem - 1px);
    border-bottom-left-radius: calc(0.25rem - 1px);
}

.dropdown-item:hover,
.dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #e0f3ff;
}

.dropdown-item.active,
.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #3f6ad8;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: 0.65rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.968rem;
    color: #6c757d;
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: 0.4rem 1.5rem;
    color: #212529;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
}

.btn-group>.btn,
.btn-group-vertical>.btn {
    position: relative;
    flex: 1 1 auto;
}

.btn-group>.btn:hover,
.btn-group-vertical>.btn:hover {
    z-index: 1;
}

.btn-group>.btn:focus,
.btn-group>.btn:active,
.btn-group>.btn.active,
.btn-group-vertical>.btn:focus,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn.active {
    z-index: 1;
}

.btn-toolbar {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.btn-toolbar .input-group {
    width: auto;
}

.btn-group>.btn:not(:first-child),
.btn-group>.btn-group:not(:first-child) {
    margin-left: -1px;
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group>.btn-group:not(:last-child)>.btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group>.btn:not(:first-child),
.btn-group>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm+.dropdown-toggle-split,
.btn-group-sm>.btn+.dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg+.dropdown-toggle-split,
.btn-group-lg>.btn+.dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

.btn-group-vertical {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.btn-group-vertical>.btn,
.btn-group-vertical>.btn-group {
    width: 100%;
}

.btn-group-vertical>.btn:not(:first-child),
.btn-group-vertical>.btn-group:not(:first-child) {
    margin-top: -1px;
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical>.btn-group:not(:last-child)>.btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.btn-group-vertical>.btn:not(:first-child),
.btn-group-vertical>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.btn-group-toggle>.btn,
.btn-group-toggle>.btn-group>.btn {
    margin-bottom: 0;
}

.btn-group-toggle>.btn input[type="radio"],
.btn-group-toggle>.btn input[type="checkbox"],
.btn-group-toggle>.btn-group>.btn input[type="radio"],
.btn-group-toggle>.btn-group>.btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
}

.input-group>.form-control,
.input-group>.form-control-plaintext,
.input-group>.custom-select,
.input-group>.custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0;
}

.input-group>.form-control+.form-control,
.input-group>.form-control+.custom-select,
.input-group>.form-control+.custom-file,
.input-group>.form-control-plaintext+.form-control,
.input-group>.form-control-plaintext+.custom-select,
.input-group>.form-control-plaintext+.custom-file,
.input-group>.custom-select+.form-control,
.input-group>.custom-select+.custom-select,
.input-group>.custom-select+.custom-file,
.input-group>.custom-file+.form-control,
.input-group>.custom-file+.custom-select,
.input-group>.custom-file+.custom-file {
    margin-left: -1px;
}

.input-group>.form-control:focus,
.input-group>.custom-select:focus,
.input-group>.custom-file .custom-file-input:focus~.custom-file-label {
    z-index: 3;
}

.input-group>.custom-file .custom-file-input:focus {
    z-index: 4;
}

.input-group>.form-control:not(:last-child),
.input-group>.custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.form-control:not(:first-child),
.input-group>.custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.custom-file {
    display: flex;
    align-items: center;
}

.input-group>.custom-file:not(:last-child) .custom-file-label,
.input-group>.custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
    display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
    position: relative;
    z-index: 2;
}

.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
    z-index: 3;
}

.input-group-prepend .btn+.btn,
.input-group-prepend .btn+.input-group-text,
.input-group-prepend .input-group-text+.input-group-text,
.input-group-prepend .input-group-text+.btn,
.input-group-append .btn+.btn,
.input-group-append .btn+.input-group-text,
.input-group-append .input-group-text+.input-group-text,
.input-group-append .input-group-text+.btn {
    margin-left: -1px;
}

.input-group-prepend {
    margin-right: -1px;
}

.input-group-append {
    margin-left: -1px;
}

.input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.88rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #eff9ff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
    margin-top: 0;
}

.input-group-lg>.form-control:not(textarea),
.input-group-lg>.custom-select {
    height: calc(2.875rem + 2px);
}

.input-group-lg>.form-control,
.input-group-lg>.custom-select,
.input-group-lg>.input-group-prepend>.input-group-text,
.input-group-lg>.input-group-append>.input-group-text,
.input-group-lg>.input-group-prepend>.btn,
.input-group-lg>.input-group-append>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

.input-group-sm>.form-control:not(textarea),
.input-group-sm>.custom-select {
    height: calc(1.8125rem + 2px);
}

.input-group-sm>.form-control,
.input-group-sm>.custom-select,
.input-group-sm>.input-group-prepend>.input-group-text,
.input-group-sm>.input-group-append>.input-group-text,
.input-group-sm>.input-group-prepend>.btn,
.input-group-sm>.input-group-append>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.input-group-lg>.custom-select,
.input-group-sm>.custom-select {
    padding-right: 1.75rem;
}

.input-group>.input-group-prepend>.btn,
.input-group>.input-group-prepend>.input-group-text,
.input-group>.input-group-append:not(:last-child)>.btn,
.input-group>.input-group-append:not(:last-child)>.input-group-text,
.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
.input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-append>.btn,
.input-group>.input-group-append>.input-group-text,
.input-group>.input-group-prepend:not(:first-child)>.btn,
.input-group>.input-group-prepend:not(:first-child)>.input-group-text,
.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.32rem;
    padding-left: 1.5rem;
}

.custom-control-inline {
    display: inline-flex;
    margin-right: 1rem;
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #007bff;
    background-color: #3f6ad8;
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #80bdff;
}

.custom-control-input:not(:disabled):active~.custom-control-label::before {
    color: #fff;
    background-color: #d3ddf6;
    border-color: #b3d7ff;
}

.custom-control-input:disabled~.custom-control-label {
    color: #6c757d;
}

.custom-control-input:disabled~.custom-control-label::before {
    background-color: #e9ecef;
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top;
}

.custom-control-label::before {
    position: absolute;
    top: 0.16rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px;
}

.custom-control-label::after {
    position: absolute;
    top: 0.16rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before {
    border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
    border-color: #007bff;
    background-color: #3f6ad8;
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(63, 106, 216, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
    background-color: rgba(63, 106, 216, 0.5);
}

.custom-radio .custom-control-label::before {
    border-radius: 50%;
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(63, 106, 216, 0.5);
}

.custom-switch {
    padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
    top: calc(0.16rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media screen and (prefers-reduced-motion: reduce) {
    .custom-switch .custom-control-label::after {
        transition: none;
    }
}

.custom-switch .custom-control-input:checked~.custom-control-label::after {
    background-color: #fff;
    transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(63, 106, 216, 0.5);
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    appearance: none;
}

.custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(128, 189, 255, 0.5);
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none;
}

.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef;
}

.custom-select::-ms-expand {
    opacity: 0;
}

.custom-select-sm {
    height: calc(1.8125rem + 2px);
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    font-size: 0.875rem;
}

.custom-select-lg {
    height: calc(2.875rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 1rem;
    font-size: 1.25rem;
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin-bottom: 0;
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin: 0;
    opacity: 0;
}

.custom-file-input:focus~.custom-file-label {
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input:disabled~.custom-file-label {
    background-color: #e9ecef;
}

.custom-file-input:lang(en)~.custom-file-label::after {
    content: "Browse";
}

.custom-file-input~.custom-file-label[data-browse]::after {
    content: attr(data-browse);
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 2.25rem;
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
    width: 100%;
    height: calc(1rem + 0.4rem);
    padding: 0;
    background-color: transparent;
    appearance: none;
}

.custom-range:focus {
    outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-moz-focus-outer {
    border: 0;
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #3f6ad8;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none;
}

@media screen and (prefers-reduced-motion: reduce) {
    .custom-range::-webkit-slider-thumb {
        transition: none;
    }
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #d3ddf6;
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #3f6ad8;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none;
}

@media screen and (prefers-reduced-motion: reduce) {
    .custom-range::-moz-range-thumb {
        transition: none;
    }
}

.custom-range::-moz-range-thumb:active {
    background-color: #d3ddf6;
}

.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #3f6ad8;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none;
}

@media screen and (prefers-reduced-motion: reduce) {
    .custom-range::-ms-thumb {
        transition: none;
    }
}

.custom-range::-ms-thumb:active {
    background-color: #d3ddf6;
}

.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
    cursor: default;
}

.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media screen and (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: none;
    }
}

.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}

.nav-link:hover,
.nav-link:focus {
    text-decoration: none;
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
    margin-bottom: -1px;
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav-pills .nav-link {
    border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #3f6ad8;
}

.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center;
}

.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center;
}

.tab-content>.tab-pane {
    display: none;
}

.tab-content>.active {
    display: block;
}

.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}

.navbar>.container,
.navbar>.container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}

.navbar-brand:hover,
.navbar-brand:focus {
    text-decoration: none;
}

.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}

.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

.navbar-toggler:hover,
.navbar-toggler:focus {
    text-decoration: none;
}

.navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
}

@media (max-width: 575.98px) {
    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-sm .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        flex-wrap: nowrap;
    }
    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-md .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        flex-wrap: nowrap;
    }
    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-md .navbar-toggler {
        display: none;
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        flex-wrap: nowrap;
    }
    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-xl .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }
    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }
    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        flex-wrap: nowrap;
    }
    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
    }
    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
}

.navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    padding-right: 0;
    padding-left: 0;
}

.navbar-expand .navbar-nav {
    flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
}

.navbar-expand .navbar-toggler {
    display: none;
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show>.nav-link,
.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0,0,0,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
    color: #fff;
}

.navbar-dark .navbar-brand:hover,
.navbar-dark .navbar-brand:focus {
    color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show>.nav-link,
.navbar-dark .navbar-nav .active>.nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
    color: #fff;
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255,255,255,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
    color: #fff;
}

.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
    color: #fff;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26, 54, 126, 0.125);
    border-radius: 0.25rem;
}

.card>hr {
    margin-right: 0;
    margin-left: 0;
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}

.card-title {
    margin-bottom: 0.75rem;
}

.card-subtitle {
    margin-top: -0.375rem;
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link:hover {
    text-decoration: none;
}

.card-link+.card-link {
    margin-left: 1.25rem;
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid rgba(26, 54, 126, 0.125);
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0;
}

.card-footer {
    padding: 0.75rem 1.25rem;
    background-color: #fff;
    border-top: 1px solid rgba(26, 54, 126, 0.125);
}

.card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
    margin-right: -0.625rem;
    margin-bottom: -0.75rem;
    margin-left: -0.625rem;
    border-bottom: 0;
}

.card-header-pills {
    margin-right: -0.625rem;
    margin-left: -0.625rem;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}

.card-img {
    width: 100%;
    border-radius: calc(0.25rem - 1px);
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(0.25rem - 1px);
    border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck {
    display: flex;
    flex-direction: column;
}

.card-deck .card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-deck {
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .card-deck .card {
        display: flex;
        flex: 1 0 0%;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
    }
}

.card-group {
    display: flex;
    flex-direction: column;
}

.card-group>.card {
    margin-bottom: 15px;
}

@media (min-width: 576px) {
    .card-group {
        flex-flow: row wrap;
    }
    .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0;
    }
    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0;
    }
    .card-group>.card:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group>.card:first-child .card-img-top,
    .card-group>.card:first-child .card-header {
        border-top-right-radius: 0;
    }
    .card-group>.card:first-child .card-img-bottom,
    .card-group>.card:first-child .card-footer {
        border-bottom-right-radius: 0;
    }
    .card-group>.card:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group>.card:last-child .card-img-top,
    .card-group>.card:last-child .card-header {
        border-top-left-radius: 0;
    }
    .card-group>.card:last-child .card-img-bottom,
    .card-group>.card:last-child .card-footer {
        border-bottom-left-radius: 0;
    }
    .card-group>.card:only-child {
        border-radius: 0.25rem;
    }
    .card-group>.card:only-child .card-img-top,
    .card-group>.card:only-child .card-header {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }
    .card-group>.card:only-child .card-img-bottom,
    .card-group>.card:only-child .card-footer {
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) {
        border-radius: 0;
    }
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
        border-radius: 0;
    }
}

.card-columns .card {
    margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }
    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}

.accordion .card {
    overflow: hidden;
}

.accordion .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0;
}

.accordion .card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0;
}

.accordion .card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.accordion .card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.accordion .card .card-header {
    margin-bottom: -1px;
}

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: 0.5rem;
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/";
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline;
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #6c757d;
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}

.page-link:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6;
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: none;
}

.page-link:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.page-item:first-child .page-link,
.pagination .page-number:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link,
.pagination .page-number:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link,
.pagination .active.page-number .page-link {
    z-index: 1;
    color: #fff;
    background-color: #3f6ad8;
    border-color: #007bff;
}

.page-item.disabled .page-link,
.pagination .disabled.page-number .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.1rem;
    line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link,
.pagination-lg .pagination .page-number:first-child .page-link,
.pagination .pagination-lg .page-number:first-child .page-link {
    border-top-left-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link,
.pagination-lg .pagination .page-number:last-child .page-link,
.pagination .pagination-lg .page-number:last-child .page-link {
    border-top-right-radius: 0.3rem;
    border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.968rem;
    line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link,
.pagination-sm .pagination .page-number:first-child .page-link,
.pagination .pagination-sm .page-number:first-child .page-link {
    border-top-left-radius: 0.2rem;
    border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link,
.pagination-sm .pagination .page-number:last-child .page-link,
.pagination .pagination-sm .page-number:last-child .page-link {
    border-top-right-radius: 0.2rem;
    border-bottom-right-radius: 0.2rem;
}

.badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}

a.badge:hover,
a.badge:focus {
    text-decoration: none;
}

.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

.badge-pill {
    padding-right: 0.6em;
    padding-left: 0.6em;
    border-radius: 10rem;
}

.badge-primary {
    color: #fff;
    background-color: #3f6ad8;
}

a.badge-primary:hover,
a.badge-primary:focus {
    color: #fff;
    background-color: #2651be;
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d;
}

a.badge-secondary:hover,
a.badge-secondary:focus {
    color: #fff;
    background-color: #545b62;
}

.badge-success {
    color: #fff;
    background-color: #3ac47d;
}

a.badge-success:hover,
a.badge-success:focus {
    color: #fff;
    background-color: #2e9d64;
}

.badge-info {
    color: #fff;
    background-color: #16aaff;
}

a.badge-info:hover,
a.badge-info:focus {
    color: #fff;
    background-color: #0090e2;
}

.badge-warning {
    color: #212529;
    background-color: #f7b924;
}

a.badge-warning:hover,
a.badge-warning:focus {
    color: #212529;
    background-color: #e0a008;
}

.badge-danger {
    color: #fff;
    background-color: #d92550;
}

a.badge-danger:hover,
a.badge-danger:focus {
    color: #fff;
    background-color: #ad1e40;
}

.badge-light {
    color: #212529;
    background-color: #eee;
}

a.badge-light:hover,
a.badge-light:focus {
    color: #212529;
    background-color: #d5d5d5;
}

.badge-dark {
    color: #fff;
    background-color: #343a40;
}

a.badge-dark:hover,
a.badge-dark:focus {
    color: #fff;
    background-color: #1d2124;
}

.badge-focus {
    color: #fff;
    background-color: #444054;
}

a.badge-focus:hover,
a.badge-focus:focus {
    color: #fff;
    background-color: #2d2a37;
}

.badge-alternate {
    color: #fff;
    background-color: #794c8a;
}

a.badge-alternate:hover,
a.badge-alternate:focus {
    color: #fff;
    background-color: #5c3a69;
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: 0.3rem;
}

@media (min-width: 576px) {
    .jumbotron {
        padding: 4rem 2rem;
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
}

.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 700;
}

.alert-dismissible {
    padding-right: 4rem;
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit;
}

.alert-primary {
    color: #213770;
    background-color: #d9e1f7;
    border-color: #c9d5f4;
}

.alert-primary hr {
    border-top-color: #b4c5f0;
}

.alert-primary .alert-link {
    color: #152449;
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db;
}

.alert-secondary hr {
    border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
    color: #202326;
}

.alert-success {
    color: #1e6641;
    background-color: #d8f3e5;
    border-color: #c8eedb;
}

.alert-success hr {
    border-top-color: #b5e8ce;
}

.alert-success .alert-link {
    color: #123f28;
}

.alert-info {
    color: #0b5885;
    background-color: #d0eeff;
    border-color: #bee7ff;
}

.alert-info hr {
    border-top-color: #a5deff;
}

.alert-info .alert-link {
    color: #073956;
}

.alert-warning {
    color: #806013;
    background-color: #fdf1d3;
    border-color: #fdebc2;
}

.alert-warning hr {
    border-top-color: #fce3a9;
}

.alert-warning .alert-link {
    color: #543f0c;
}

.alert-danger {
    color: #71132a;
    background-color: #f7d3dc;
    border-color: #f4c2ce;
}

.alert-danger hr {
    border-top-color: #f0acbd;
}

.alert-danger .alert-link {
    color: #450c1a;
}

.alert-light {
    color: #7c7c7c;
    background-color: #fcfcfc;
    border-color: #fafafa;
}

.alert-light hr {
    border-top-color: #ededed;
}

.alert-light .alert-link {
    color: #636363;
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca;
}

.alert-dark hr {
    border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
    color: #040505;
}

.alert-focus {
    color: #23212c;
    background-color: #dad9dd;
    border-color: #cbcacf;
}

.alert-focus hr {
    border-top-color: #bebdc3;
}

.alert-focus .alert-link {
    color: #0c0b0f;
}

.alert-alternate {
    color: #3f2848;
    background-color: #e4dbe8;
    border-color: #d9cdde;
}

.alert-alternate hr {
    border-top-color: #cdbed4;
}

.alert-alternate .alert-link {
    color: #221627;
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }
    to {
        background-position: 0 0;
    }
}

.progress {
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.75rem;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}

.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #3f6ad8;
    transition: width 0.6s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}

.progress-bar-animated {
    animation: progress-bar-stripes 1s linear infinite;
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1;
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit;
}

.list-group-item-action:hover,
.list-group-item-action:focus {
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa;
}

.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.list-group-item:hover,
.list-group-item:focus {
    z-index: 1;
    text-decoration: none;
}

.list-group-item.disabled,
.list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #3f6ad8;
    border-color: #007bff;
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}

.list-group-flush .list-group-item:last-child {
    margin-bottom: -1px;
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom: 0;
}

.list-group-item-primary {
    color: #213770;
    background-color: #c9d5f4;
}

.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
    color: #213770;
    background-color: #b4c5f0;
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #213770;
    border-color: #213770;
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
    color: #383d41;
    background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41;
}

.list-group-item-success {
    color: #1e6641;
    background-color: #c8eedb;
}

.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
    color: #1e6641;
    background-color: #b5e8ce;
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #1e6641;
    border-color: #1e6641;
}

.list-group-item-info {
    color: #0b5885;
    background-color: #bee7ff;
}

.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
    color: #0b5885;
    background-color: #a5deff;
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0b5885;
    border-color: #0b5885;
}

.list-group-item-warning {
    color: #806013;
    background-color: #fdebc2;
}

.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
    color: #806013;
    background-color: #fce3a9;
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #806013;
    border-color: #806013;
}

.list-group-item-danger {
    color: #71132a;
    background-color: #f4c2ce;
}

.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
    color: #71132a;
    background-color: #f0acbd;
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #71132a;
    border-color: #71132a;
}

.list-group-item-light {
    color: #7c7c7c;
    background-color: #fafafa;
}

.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
    color: #7c7c7c;
    background-color: #ededed;
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #7c7c7c;
    border-color: #7c7c7c;
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21;
}

.list-group-item-focus {
    color: #23212c;
    background-color: #cbcacf;
}

.list-group-item-focus.list-group-item-action:hover,
.list-group-item-focus.list-group-item-action:focus {
    color: #23212c;
    background-color: #bebdc3;
}

.list-group-item-focus.list-group-item-action.active {
    color: #fff;
    background-color: #23212c;
    border-color: #23212c;
}

.list-group-item-alternate {
    color: #3f2848;
    background-color: #d9cdde;
}

.list-group-item-alternate.list-group-item-action:hover,
.list-group-item-alternate.list-group-item-action:focus {
    color: #3f2848;
    background-color: #cdbed4;
}

.list-group-item-alternate.list-group-item-action.active {
    color: #fff;
    background-color: #3f2848;
    border-color: #3f2848;
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 0.5;
}

.close:hover {
    color: #000;
    text-decoration: none;
}

.close:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.close:not(:disabled):not(.disabled):hover,
.close:not(:disabled):not(.disabled):focus {
    opacity: 0.75;
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    appearance: none;
}

a.close.disabled {
    pointer-events: none;
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.25rem;
    box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
}

.toast:not(:last-child) {
    margin-bottom: 0.75rem;
}

.toast.showing {
    opacity: 1;
}

.toast.show {
    display: block;
    opacity: 1;
}

.toast.hide {
    display: none;
}

.toast-header {
    display: flex;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color: #6c757d;
    background-color: rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.toast-body {
    padding: 0.75rem;
}

.modal-open {
    overflow: hidden;
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}

.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px);
}

@media screen and (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}

.modal.show .modal-dialog {
    transform: none;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - (0.5rem * 2));
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - (0.5rem * 2));
    content: "";
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}

.modal-backdrop.fade {
    opacity: 0;
}

.modal-backdrop.show {
    opacity: 0.5;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #e9ecef;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
}

.modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: 1rem;
}

.modal-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #e9ecef;
    border-bottom-right-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem;
}

.modal-footer> :not(:first-child) {
    margin-left: 0.25rem;
}

.modal-footer> :not(:last-child) {
    margin-right: 0.25rem;
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }
    .modal-dialog-centered {
        min-height: calc(100% - (1.75rem * 2));
    }
    .modal-dialog-centered::before {
        height: calc(100vh - (1.75rem * 2));
    }
    .modal-sm {
        max-width: 300px;
    }
}

@media (min-width: 992px) {
    .modal-lg,
    .modal-xl {
        max-width: 800px;
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width: 1140px;
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0;
}

.tooltip.show {
    opacity: 0.9;
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^="top"] {
    padding: 0.4rem 0;
}

.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0;
}

.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^="right"] {
    padding: 0 0.4rem;
}

.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^="bottom"] {
    padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0;
}

.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^="left"] {
    padding: 0 0.4rem;
}

.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000;
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 0.25rem;
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 320px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(26, 54, 126, 0.125);
    border-radius: 0.3rem;
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem;
}

.popover .arrow::before,
.popover .arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-popover-top,
.bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.5rem;
}

.bs-popover-top .arrow,
.bs-popover-auto[x-placement^="top"] .arrow {
    bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
    border-width: 0.5rem 0.5rem 0;
}

.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before {
    bottom: 0;
    border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
    bottom: 1px;
    border-top-color: #fff;
}

.bs-popover-right,
.bs-popover-auto[x-placement^="right"] {
    margin-left: 0.5rem;
}

.bs-popover-right .arrow,
.bs-popover-auto[x-placement^="right"] .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0;
}

.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
    border-width: 0.5rem 0.5rem 0.5rem 0;
}

.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before {
    left: 0;
    border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
    left: 1px;
    border-right-color: #fff;
}

.bs-popover-bottom,
.bs-popover-auto[x-placement^="bottom"] {
    margin-top: 0.5rem;
}

.bs-popover-bottom .arrow,
.bs-popover-auto[x-placement^="bottom"] .arrow {
    top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-width: 0 0.5rem 0.5rem 0.5rem;
}

.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before {
    top: 0;
    border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
    top: 1px;
    border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before,
.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #fff;
}

.bs-popover-left,
.bs-popover-auto[x-placement^="left"] {
    margin-right: 0.5rem;
}

.bs-popover-left .arrow,
.bs-popover-auto[x-placement^="left"] .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0;
}

.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
    border-width: 0.5rem 0 0.5rem 0.5rem;
}

.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before {
    right: 0;
    border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
    right: 1px;
    border-left-color: #fff;
}

.popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.88rem;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid #f2f2f2;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}



.text-left {
    text-align: left !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }
    .text-sm-right {
        text-align: right !important;
    }
    .text-sm-center {
        text-align: center !important;
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }
    .text-md-right {
        text-align: right !important;
    }
    .text-md-center {
        text-align: center !important;
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }
    .text-lg-right {
        text-align: right !important;
    }
    .text-lg-center {
        text-align: center !important;
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important;
    }
    .text-xl-right {
        text-align: right !important;
    }
    .text-xl-center {
        text-align: center !important;
    }
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.font-weight-light {
    font-weight: 300 !important;
}

.font-weight-lighter {
    font-weight: lighter !important;
}

.font-weight-normal {
    font-weight: 400 !important;
}

.font-weight-bold {
    font-weight: 700 !important;
}

.font-weight-bolder {
    font-weight: bolder !important;
}

.font-italic {
    font-style: italic !important;
}

.text-white {
    color: #fff !important;
}

.text-primary {
    color: #3f6ad8 !important;
}

a.text-primary:hover,
a.text-primary:focus {
    color: #2248a8 !important;
}

.text-secondary {
    color: #6c757d !important;
}

a.text-secondary:hover,
a.text-secondary:focus {
    color: #494f54 !important;
}

.text-success {
    color: #3ac47d !important;
}

a.text-success:hover,
a.text-success:focus {
    color: #298957 !important;
}

.text-info {
    color: #16aaff !important;
}

a.text-info:hover,
a.text-info:focus {
    color: #007fc9 !important;
}

.text-warning {
    color: #f7b924 !important;
}

a.text-warning:hover,
a.text-warning:focus {
    color: #c78f07 !important;
}

.text-danger {
    color: #d92550 !important;
}

a.text-danger:hover,
a.text-danger:focus {
    color: #981a38 !important;
}

.text-light {
    color: #eee !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #c8c8c8 !important;
}

.text-dark {
    color: #343a40 !important;
}

a.text-dark:hover,
a.text-dark:focus {
    color: #121416 !important;
}

.text-focus {
    color: #444054 !important;
}

a.text-focus:hover,
a.text-focus:focus {
    color: #211f29 !important;
}

.text-alternate {
    color: #794c8a !important;
}

a.text-alternate:hover,
a.text-alternate:focus {
    color: #4e3159 !important;
}

.text-body {
    color: #495057 !important;
}

.text-muted {
    color: #6c757d !important;
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}

.text-decoration-none {
    text-decoration: none !important;
}

.text-reset {
    color: inherit !important;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

a,
button,
.btn {
    outline: none !important;
}

.app-container {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    margin: 0;
}

.table th,
.table td {
    vertical-align: middle;
}

.app-header {
    height: 60px;
    display: flex;
    align-items: center;
    align-content: center;
    position: relative;
    z-index: 10;
    transition: all 0.2s;
}

.app-header.header-shadow {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
}

.app-header .app-header__content {
    display: flex;
    align-items: center;
    align-content: center;
    flex: 1;
    padding: 0 1.5rem;
    height: 60px;
}

.app-header .app-header__content .app-header-left {
    display: flex;
    align-items: center;
}

.app-header .app-header__content .header-menu .nav-link {
    color: #6c757d;
}

.app-header .app-header__content .header-menu .nav-link i {
    color: #adb5bd;
}

.app-header .app-header__content .header-menu .nav-link:hover {
    color: #212529;
}

.app-header .app-header__content .app-header-right {
    align-items: center;
    display: flex;
    margin-left: auto;
}

.app-header .header-user-info>.widget-heading,
.app-header .header-user-info>.widget-subheading {
    white-space: nowrap;
}

.app-header .header-user-info>.widget-subheading {
    font-size: 0.8rem;
}

.app-header__logo {
    padding: 0 1.5rem;
    height: 60px;
    width: 280px;
    display: flex;
    align-items: center;
    transition: width 0.2s;
}

.app-header__logo .logo-src {
    height: 23px;
    width: 97px;
    background: url(assets/images/logo-inverse.png);
}

.app-header__menu,
.app-header__mobile-menu {
    display: none;
    padding: 0 1.5rem;
    height: 60px;
    align-items: center;
}

.fixed-header .app-header {
    position: fixed;
    width: 100%;
    top: 0;
}

.fixed-header .app-header .app-header__logo {
    visibility: visible;
}

.fixed-header .app-main {
    padding-top: 60px;
}

.fixed-header:not(.fixed-sidebar):not(.closed-sidebar) .app-sidebar .app-header__logo {
    visibility: hidden;
}

.app-header.header-text-light .app-header-left>.nav>li>.nav-link {
    color: rgba(255, 255, 255, 0.7);
}

.app-header.header-text-light .app-header-left>.nav>li>.nav-link .nav-link-icon {
    color: rgba(255, 255, 255, 0.8);
}

.app-header.header-text-light .app-header-left>.nav>li>.nav-link:hover {
    color: #fff;
}

.app-header.header-text-light .app-header-right .icon-wrapper-alt .fa,
.app-header.header-text-light .app-header-right .icon-wrapper-alt .icon {
    color: rgba(255, 255, 255, 0.7) !important;
    transition: all 0.2s;
}

.app-header.header-text-light .app-header-right .icon-wrapper-alt .icon-wrapper-bg {
    background: rgba(255, 255, 255, 0.1) !important;
    transition: all 0.2s;
    opacity: 1;
}

.app-header.header-text-light .app-header-right .icon-wrapper-alt:hover .fa,
.app-header.header-text-light .app-header-right .icon-wrapper-alt:hover .icon {
    color: rgba(255, 255, 255, 0.9) !important;
}

.app-header.header-text-light .app-header-right .icon-wrapper-alt:hover .icon-wrapper-bg {
    background: rgba(255, 255, 255, 0.15) !important;
}

.app-header.header-text-light .app-header-right .icon-wrapper-alt .badge-dot {
    border-color: transparent;
}

.app-header.header-text-light .app-header-right>.header-btn-lg .widget-content-left .btn-group>.btn,
.app-header.header-text-light .app-header-right>.header-btn-lg .widget-heading,
.app-header.header-text-light .app-header-right>.header-btn-lg .widget-subheading {
    color: rgba(255, 255, 255, 0.8);
}

.app-header.header-text-light .app-header-right>.header-btn-lg .header-user-info>.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.1), 0 0.0625rem 0.125rem rgba(0, 0, 0, 0.2);
}

.app-header.header-text-light .search-wrapper .input-holder .search-icon {
    background: rgba(0, 0, 0, 0.1);
}

.app-header.header-text-light .search-wrapper .input-holder .search-input::placeholder,
.app-header.header-text-light .search-wrapper .input-holder .search-input::-webkit-input-placeholder,
.app-header.header-text-light .search-wrapper .input-holder .search-input:-ms-input-placeholder,
.app-header.header-text-light .search-wrapper .input-holder .search-input:-moz-placeholder,
.app-header.header-text-light .search-wrapper .input-holder .search-input::-moz-placeholder {
    color: rgba(255, 255, 255, 0.5) !important;
}

.app-header.header-text-light .search-wrapper.active .input-holder {
    background: rgba(255, 255, 255, 0.1);
}

.app-header.header-text-light .search-wrapper.active .input-holder .search-input {
    color: rgba(255, 255, 255, 0.8);
}

.app-header.header-text-light .search-wrapper.active .input-holder .search-icon {
    background: rgba(255, 255, 255, 0.1);
}

.app-header.header-text-light .header-btn-lg::before {
    background: rgba(255, 255, 255, 0.2);
}

.app-header.header-text-light .header-btn-lg .hamburger-inner,
.app-header.header-text-light .header-btn-lg .hamburger.is-active .hamburger-inner,
.app-header.header-text-light .header-btn-lg .hamburger-inner::before,
.app-header.header-text-light .header-btn-lg .hamburger-inner::after,
.app-header.header-text-light .header__pane .hamburger-inner,
.app-header.header-text-light .header__pane .hamburger.is-active .hamburger-inner,
.app-header.header-text-light .header__pane .hamburger-inner::before,
.app-header.header-text-light .header__pane .hamburger-inner::after {
    background-color: rgba(255, 255, 255, 0.8) !important;
}

.app-header.header-text-light .search-wrapper .input-holder .search-icon span::after {
    border-color: rgba(255, 255, 255, 0.8);
}

.app-header.header-text-light .search-wrapper .close::before,
.app-header.header-text-light .search-wrapper .close::after,
.app-header.header-text-light .search-wrapper .input-holder .search-icon span::before {
    background: rgba(255, 255, 255, 0.8);
}

.app-header.header-text-light .app-header__logo .logo-src {
    background: url(assets/images/logo.png);
}

.app-header.header-text-light .app-header__mobile-menu .hamburger-inner,
.app-header.header-text-light .app-header__mobile-menu .hamburger-inner::before,
.app-header.header-text-light .app-header__mobile-menu .hamburger-inner::after {
    background: rgba(255, 255, 255, 0.9);
}

.app-header.header-text-dark .app-header-left>.nav>li>.nav-link {
    color: rgba(0, 0, 0, 0.7);
}

.app-header.header-text-dark .app-header-left>.nav>li>.nav-link .nav-link-icon {
    color: rgba(0, 0, 0, 0.8);
}

.app-header.header-text-dark .app-header-left>.nav>li>.nav-link:hover {
    color: #000;
}

.app-header.header-text-dark .app-header-right .icon-wrapper-alt .fa,
.app-header.header-text-dark .app-header-right .icon-wrapper-alt .icon {
    color: rgba(0, 0, 0, 0.7) !important;
    transition: all 0.2s;
}

.app-header.header-text-dark .app-header-right .icon-wrapper-alt .icon-wrapper-bg {
    background: rgba(0, 0, 0, 0.1) !important;
    transition: all 0.2s;
    opacity: 1;
}

.app-header.header-text-dark .app-header-right .icon-wrapper-alt:hover .fa,
.app-header.header-text-dark .app-header-right .icon-wrapper-alt:hover .icon {
    color: rgba(0, 0, 0, 0.95) !important;
}

.app-header.header-text-dark .app-header-right .icon-wrapper-alt:hover .icon-wrapper-bg {
    background: rgba(0, 0, 0, 0.15) !important;
}

.app-header.header-text-dark .app-header-right .icon-wrapper-alt .badge-dot {
    border-color: transparent;
}

.app-header.header-text-dark .app-header-right>.header-btn-lg .widget-content-left .btn-group>.btn,
.app-header.header-text-dark .app-header-right>.header-btn-lg .widget-heading,
.app-header.header-text-dark .app-header-right>.header-btn-lg .widget-subheading {
    color: rgba(0, 0, 0, 0.8);
}

.app-header.header-text-dark .app-header-right>.header-btn-lg .header-user-info>.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.1), 0 0.0625rem 0.125rem rgba(0, 0, 0, 0.2);
}

.app-header.header-text-dark .search-wrapper .input-holder .search-icon {
    background: rgba(0, 0, 0, 0.1);
}

.app-header.header-text-dark .search-wrapper.active .input-holder {
    background: rgba(0, 0, 0, 0.1);
}

.app-header.header-text-dark .search-wrapper.active .input-holder .search-input {
    color: rgba(0, 0, 0, 0.8);
}

.app-header.header-text-dark .search-wrapper.active .input-holder .search-icon {
    background: rgba(0, 0, 0, 0.1);
}

.app-header.header-text-dark .header-btn-lg::before {
    background: rgba(0, 0, 0, 0.2);
}

.app-header.header-text-dark .header-btn-lg .hamburger-inner,
.app-header.header-text-dark .header-btn-lg .hamburger.is-active .hamburger-inner,
.app-header.header-text-dark .header-btn-lg .hamburger-inner::before,
.app-header.header-text-dark .header-btn-lg .hamburger-inner::after,
.app-header.header-text-dark .header__pane .hamburger-inner,
.app-header.header-text-dark .header__pane .hamburger.is-active .hamburger-inner,
.app-header.header-text-dark .header__pane .hamburger-inner::before,
.app-header.header-text-dark .header__pane .hamburger-inner::after {
    background-color: rgba(0, 0, 0, 0.8) !important;
}

.app-header.header-text-dark .search-wrapper .input-holder .search-icon span::after {
    border-color: rgba(0, 0, 0, 0.8);
}

.app-header.header-text-dark .search-wrapper .close::before,
.app-header.header-text-dark .search-wrapper .close::after,
.app-header.header-text-dark .search-wrapper .input-holder .search-icon span::before {
    background: rgba(0, 0, 0, 0.8);
}

.app-header.header-text-dark .app-header__logo .logo-src {
    background: url(assets/images/logo-inverse.png);
}

.app-sidebar {
    width: 280px;
    display: flex;
    z-index: 11;
    overflow: hidden;
    min-width: 280px;
    position: relative;
    flex: 0 0 280px;
    margin-top: -60px;
    padding-top: 60px;
    transition: all 0.2s;
}

.app-sidebar .app-sidebar__inner {
    padding: 2px 1.5rem 1.5rem;
}

.app-sidebar .scrollbar-sidebar {
    z-index: 15;
    width: 100%;
}

.app-sidebar .app-sidebar-bg {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    opacity: 0.05;
    background-size: cover;
    z-index: 10;
}

.app-sidebar .app-header__logo {
    position: absolute;
    left: 0;
    top: 0;
    display: none;
    z-index: 11;
}

.app-sidebar.sidebar-shadow {
    box-shadow: 7px 0 60px rgba(0, 0, 0, 0.05);
}

.app-sidebar__heading {
    text-transform: uppercase;
    font-size: 0.8rem;
    margin: 0.75rem 0;
    font-weight: bold;
    color: #3f6ad8;
    white-space: nowrap;
    position: relative;
}

.sidebar-mobile-overlay {
    display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    background: #333;
    opacity: 0.6;
    left: 0;
    top: 0;
    z-index: 12;
}

.vertical-nav-menu {
    margin: 0;
    padding: 0;
    position: relative;
    list-style: none;
}

.vertical-nav-menu::after {
    content: " ";
    pointer-events: none;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
}

.vertical-nav-menu .mm-collapse:not(.mm-show) {
    display: none;
}

.vertical-nav-menu .mm-collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition-timing-function: ease;
    transition-duration: 0.25s;
    transition-property: height, visibility;
}

.vertical-nav-menu ul {
    margin: 0;
    padding: 0;
    position: relative;
    list-style: none;
}

.vertical-nav-menu:before {
    opacity: 0;
    transition: opacity 300ms;
}

.vertical-nav-menu li a {
    display: block;
    line-height: 2.4rem;
    height: 2.4rem;
    padding: 0 1.5rem 0 45px;
    position: relative;
    border-radius: 0.25rem;
    color: #343a40;
    white-space: nowrap;
    transition: all 0.2s;
    margin: 0.1rem 0;
}

.vertical-nav-menu li a:hover {
    background: #e0f3ff;
    text-decoration: none;
}

.vertical-nav-menu li a:hover i.metismenu-icon {
    opacity: 0.6;
}

.vertical-nav-menu li a:hover i.metismenu-state-icon {
    opacity: 1;
}

.vertical-nav-menu li.mm-active>a {
    font-weight: bold;
}

.vertical-nav-menu li.mm-active>a i.metismenu-state-icon {
    transform: rotate(-180deg);
}

.vertical-nav-menu li a.mm-active {
    color: #343a40;
    background: #e0f3ff;
    font-weight: bold;
}

.vertical-nav-menu i.metismenu-state-icon,
.vertical-nav-menu i.metismenu-icon {
    text-align: center;
    width: 34px;
    height: 34px;
    line-height: 34px;
    position: absolute;
    left: 5px;
    top: 50%;
    margin-top: -17px;
    font-size: 1.5rem;
    opacity: 0.3;
    transition: color 300ms;
}

.vertical-nav-menu i.metismenu-state-icon {
    transition: transform 300ms;
    left: auto;
    right: 0;
}

.vertical-nav-menu ul {
    transition: padding 300ms;
    padding: 0.5em 0 0 2rem;
}

.vertical-nav-menu ul:before {
    content: "";
    height: 100%;
    opacity: 1;
    width: 3px;
    background: #e0f3ff;
    position: absolute;
    left: 20px;
    top: 0;
    border-radius: 15px;
}

.vertical-nav-menu ul>li>a {
    color: #6c757d;
    height: 2rem;
    line-height: 2rem;
    padding: 0 1.5rem 0;
}

.vertical-nav-menu ul>li>a:hover {
    color: #3f6ad8;
}

.vertical-nav-menu ul>li>a .metismenu-icon {
    display: none;
}

.vertical-nav-menu ul>li>a.mm-active {
    color: #3f6ad8;
    background: #e0f3ff;
    font-weight: bold;
}

.app-sidebar.sidebar-text-light {
    border-right: 0 !important;
}

.app-sidebar.sidebar-text-light .app-sidebar__heading {
    color: rgba(255, 255, 255, 0.6);
}

.app-sidebar.sidebar-text-light .app-sidebar__heading::before {
    background: rgba(255, 255, 255, 0.5) !important;
}

.app-sidebar.sidebar-text-light .vertical-nav-menu li a {
    color: rgba(255, 255, 255, 0.7);
}

.app-sidebar.sidebar-text-light .vertical-nav-menu li a i.metismenu-icon {
    opacity: 0.5;
}

.app-sidebar.sidebar-text-light .vertical-nav-menu li a i.metismenu-state-icon {
    opacity: 0.5;
}

.app-sidebar.sidebar-text-light .vertical-nav-menu li a:hover {
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
}

.app-sidebar.sidebar-text-light .vertical-nav-menu li a:hover i.metismenu-icon {
    opacity: 0.8;
}

.app-sidebar.sidebar-text-light .vertical-nav-menu li a:hover i.metismenu-state-icon {
    opacity: 1;
}

.app-sidebar.sidebar-text-light .vertical-nav-menu li a.mm-active {
    color: rgba(255, 255, 255, 0.7);
    background: rgba(255, 255, 255, 0.15);
}

.app-sidebar.sidebar-text-light .vertical-nav-menu ul:before {
    background: rgba(255, 255, 255, 0.1);
}

.app-sidebar.sidebar-text-light .vertical-nav-menu ul>li>a {
    color: rgba(255, 255, 255, 0.6);
}

.app-sidebar.sidebar-text-light .vertical-nav-menu ul>li>a:hover {
    color: #fff;
}

.app-sidebar.sidebar-text-light .vertical-nav-menu ul>li>a.mm-active {
    color: #fff;
    background: rgba(255, 255, 255, 0.15);
}

.app-sidebar.sidebar-text-light .ps__thumb-y {
    background: rgba(255, 255, 255, 0.3);
}

.app-sidebar.sidebar-text-light .ps__rail-y:hover .ps__thumb-y {
    background: rgba(255, 255, 255, 0.2);
}

.app-sidebar.sidebar-text-light .app-header__logo .logo-src {
    background: url(assets/images/logo.png);
}

.app-sidebar.sidebar-text-light .app-header__logo .hamburger-inner,
.app-sidebar.sidebar-text-light .app-header__logo .hamburger-inner::before,
.app-sidebar.sidebar-text-light .app-header__logo .hamburger-inner::after {
    background-color: rgba(255, 255, 255, 0.8);
}

.app-sidebar.sidebar-text-dark {
    border-right: 0 !important;
}

.app-sidebar.sidebar-text-dark .app-sidebar__heading {
    color: rgba(0, 0, 0, 0.6);
}

.app-sidebar.sidebar-text-dark .app-sidebar__heading::before {
    background: rgba(0, 0, 0, 0.5) !important;
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu li a {
    color: rgba(0, 0, 0, 0.6);
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu li a i.metismenu-icon {
    opacity: 0.5;
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu li a i.metismenu-state-icon {
    opacity: 0.5;
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu li a:hover {
    background: rgba(0, 0, 0, 0.15);
    color: rgba(0, 0, 0, 0.7);
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu li a:hover i.metismenu-icon {
    opacity: 0.7;
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu li a:hover i.metismenu-state-icon {
    opacity: 1;
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu li a.mm-active {
    color: rgba(0, 0, 0, 0.7);
    background: rgba(0, 0, 0, 0.15);
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu ul:before {
    background: rgba(0, 0, 0, 0.1);
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu ul>li>a {
    color: rgba(0, 0, 0, 0.4);
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu ul>li>a:hover {
    color: rgba(0, 0, 0, 0.7);
}

.app-sidebar.sidebar-text-dark .vertical-nav-menu ul>li>a.mm-active {
    color: rgba(0, 0, 0, 0.7);
    background: rgba(0, 0, 0, 0.15);
}

.app-sidebar.sidebar-text-dark .ps__thumb-y {
    background: rgba(0, 0, 0, 0.3);
}

.app-sidebar.sidebar-text-dark .ps__rail-y:hover .ps__thumb-y {
    background: rgba(0, 0, 0, 0.2);
}

.app-sidebar.sidebar-text-dark .app-header__logo .hamburger-inner,
.app-sidebar.sidebar-text-dark .app-header__logo .hamburger-inner::before,
.app-sidebar.sidebar-text-dark .app-header__logo .hamburger-inner::after {
    background-color: rgba(0, 0, 0, 0.8);
}

.fixed-sidebar .app-sidebar {
    position: fixed;
    height: 100vh;
}

.fixed-sidebar .app-main .app-main__outer {
    z-index: 9;
    padding-left: 280px;
}

.fixed-sidebar.fixed-header .app-sidebar .app-header__logo {
    display: none;
}

.fixed-sidebar:not(.fixed-header) .app-sidebar .app-header__logo {
    display: flex;
}

.fixed-sidebar:not(.fixed-header) .app-header {
    margin-left: 280px;
}

.fixed-sidebar:not(.fixed-header) .app-header .app-header__logo {
    display: none;
}

.fixed-sidebar.closed-sidebar:not(.fixed-header) .app-header {
    margin-left: 80px;
}

.fixed-sidebar.closed-sidebar:not(.fixed-header) .app-sidebar .app-header__logo {
    width: 80px;
    padding: 0;
}

.fixed-sidebar.closed-sidebar:not(.fixed-header) .app-sidebar .app-header__logo .logo-src {
    display: none;
}

.fixed-sidebar.closed-sidebar:not(.fixed-header) .app-sidebar .app-header__logo .header__pane {
    margin-right: auto;
}

.closed-sidebar .app-sidebar {
    transition: all 0.3s ease;
    width: 80px;
    min-width: 80px;
    flex: 0 0 80px;
    z-index: 13;
}

.closed-sidebar .app-sidebar .app-sidebar__inner .app-sidebar__heading {
    text-indent: -999em;
}

.closed-sidebar .app-sidebar .app-sidebar__inner .app-sidebar__heading::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background: #e0f3ff;
    text-indent: 1px;
}

.closed-sidebar .app-sidebar .app-sidebar__inner ul li a {
    text-indent: -99rem;
    padding: 0;
}

.closed-sidebar .app-sidebar .app-sidebar__inner .metismenu-icon {
    text-indent: 0;
    left: 50%;
    margin-left: -17px;
}

.closed-sidebar .app-sidebar .app-sidebar__inner .metismenu-state-icon {
    visibility: hidden;
}

.closed-sidebar .app-sidebar .app-sidebar__inner ul::before {
    display: none;
}

.closed-sidebar .app-sidebar .app-sidebar__inner ul.mm-show {
    padding: 0;
}

.closed-sidebar .app-sidebar .app-sidebar__inner ul.mm-show>li>a {
    height: 0;
}

.closed-sidebar .app-sidebar:hover {
    flex: 0 0 280px !important;
    width: 280px !important;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner .app-sidebar__heading {
    text-indent: initial;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner .app-sidebar__heading::before {
    display: none;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner ul::before {
    display: block;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner ul li a {
    text-indent: initial;
    padding: 0 1.5rem 0 45px;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner .metismenu-icon {
    text-indent: initial;
    left: 5px;
    margin-left: 0;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner .metismenu-state-icon {
    visibility: visible;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner ul.mm-show {
    padding: 0.5em 0 0 2rem;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner ul.mm-show>li>a {
    height: 2.3em;
}

.closed-sidebar .app-sidebar:hover .app-sidebar__inner ul ul li a {
    padding-left: 1em;
}

.closed-sidebar:not(.sidebar-mobile-open) .app-sidebar .scrollbar-sidebar {
    position: static;
    height: auto;
    overflow: initial !important;
}

.closed-sidebar:not(.sidebar-mobile-open) .app-sidebar:hover .scrollbar-sidebar {
    position: absolute;
    height: 100%;
    overflow: hidden !important;
}

.closed-sidebar:not(.closed-sidebar-mobile) .app-header .app-header__logo {
    width: 80px;
}

.closed-sidebar:not(.closed-sidebar-mobile) .app-header .app-header__logo .logo-src {
    display: none;
}

.closed-sidebar:not(.closed-sidebar-mobile) .app-header .app-header__logo .header__pane {
    margin-right: auto;
}

.closed-sidebar.fixed-sidebar .app-main__outer {
    padding-left: 80px;
}

.closed-sidebar.fixed-header:not(.fixed-sidebar) .app-sidebar .app-header__logo {
    visibility: hidden;
}

.closed-sidebar.closed-sidebar-mobile .app-sidebar .app-header__logo,
.closed-sidebar.closed-sidebar-mobile .app-header .app-header__logo {
    width: auto;
    display: flex;
}

.closed-sidebar.closed-sidebar-mobile .app-sidebar .app-header__logo .header__pane,
.closed-sidebar.closed-sidebar-mobile .app-header .app-header__logo .header__pane {
    display: none;
}

.closed-sidebar.closed-sidebar-mobile .app-sidebar .app-header__logo {
    display: flex;
    width: 80px;
    padding: 0 1.5rem !important;
}

.closed-sidebar.closed-sidebar-mobile .app-sidebar .app-header__logo .logo-src {
    display: block !important;
    margin: 0 auto;
    width: 21px;
}

.closed-sidebar.closed-sidebar-mobile .app-sidebar .app-header__logo .header__pane {
    display: none;
}

.closed-sidebar.closed-sidebar-mobile .app-sidebar:hover .app-header__logo {
    width: 280px;
}

.closed-sidebar.closed-sidebar-mobile .app-sidebar:hover .app-header__logo .logo-src {
    width: 97px;
    margin: 0;
}

.closed-sidebar.closed-sidebar-mobile .app-header {
    margin-left: 0 !important;
}

.closed-sidebar.fixed-footer .app-footer__inner {
    margin-left: 0 !important;
}

.app-main {
    flex: 1;
    display: flex;
    z-index: 8;
    position: relative;
}

.app-main .app-main__outer {
    flex: 1;
    flex-direction: column;
    display: flex;
    z-index: 12;
}

.app-main .app-main__inner {
    padding: 10px 10px 0;
    flex: 1;
}

.app-theme-white.app-container {
    background: #f1f4f6;
}

.app-theme-white .app-sidebar {
    background: #fff;
}

.app-theme-white .app-page-title {
    background: rgba(255, 255, 255, 0.45);
}

.app-theme-white .app-footer .app-footer__inner,
.app-theme-white .app-header {
    background: #fafbfc;
}

.app-theme-white.fixed-header .app-header__logo {
    background: rgba(250, 251, 252, 0.1);
}

.app-footer {
    height: 60px;
}

.app-footer .app-footer__inner {
    padding: 0 1.5rem 0 0.75rem;
    height: 60px;
    display: flex;
    align-content: center;
    align-items: center;
}

.app-footer .app-footer__inner .app-footer-left {
    display: flex;
    align-items: center;
}

.app-footer .app-footer__inner .app-footer-right {
    margin-left: auto;
    display: flex;
}

.fixed-footer .app-footer {
    position: fixed;
    width: 100%;
    bottom: 0;
    left: 0;
    z-index: 7;
}

.fixed-footer .app-footer .app-footer__inner {
    margin-left: 280px;
    box-shadow: 0.3rem -0.46875rem 2.1875rem rgba(4, 9, 20, 0.02), 0.3rem -0.9375rem 1.40625rem rgba(4, 9, 20, 0.02), 0.3rem -0.25rem 0.53125rem rgba(4, 9, 20, 0.04), 0.3rem -0.125rem 0.1875rem rgba(4, 9, 20, 0.02);
}

.fixed-footer .app-main .app-main__outer {
    padding-bottom: 60px;
}

.app-page-title {
    padding: 30px;
    margin: -30px -30px 30px;
    position: relative;
}

.app-page-title+.body-tabs-layout {
    margin-top: -30px !important;
}

.app-page-title .page-title-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.app-page-title .page-title-heading,
.app-page-title .page-title-subheading {
    margin: 0;
    padding: 0;
}

.app-page-title .page-title-heading {
    font-size: 1.25rem;
    font-weight: 400;
    display: flex;
    align-content: center;
    align-items: center;
}

.app-page-title .page-title-subheading {
    padding: 3px 0 0;
    font-size: 0.88rem;
    opacity: 0.6;
}

.app-page-title .page-title-subheading .breadcrumb {
    padding: 0;
    margin: 3px 0 0;
    background: transparent;
}

.app-page-title .page-title-actions {
    margin-left: auto;
}

.app-page-title .page-title-actions .breadcrumb {
    margin: 0;
    padding: 0;
    background: transparent;
}


/* ------------ meche no tamanho do icone das paginas de MOSTRAR */

.app-page-title .page-title-icon {
    font-size: 2rem;
    display: flex;
    align-items: center;
    align-content: center;
    text-align: center;
    padding: 0.83333rem;
    margin: 0 30px 0 0;
    background: #fff;
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-radius: 0.25rem;
    width: 70px;
    height: 70px;
}

.app-page-title .page-title-icon i {
    margin: auto;
}

.app-page-title .page-title-icon.rounded-circle {
    margin: 0 20px 0 0;
}

.app-page-title+.RRT__container {
    margin-top: -23.07692px;
}

.app-page-title.app-page-title-simple {
    margin: 0;
    background: none !important;
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
}

.page-title-icon-rounded .page-title-icon {
    border-radius: 50px;
}

.search-wrapper {
    position: relative;
    margin-right: 0.66667rem;
}

.search-wrapper .input-holder {
    height: 42px;
    width: 42px;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease-in-out;
}

.search-wrapper .input-holder .search-input {
    width: 100%;
    padding: 0 70px 0 20px;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    background: transparent;
    box-sizing: border-box;
    border: none;
    outline: none;
    transform: translate(0, 60px);
    transition: all 0.3s cubic-bezier(0, 0.105, 0.035, 1.57);
    transition-delay: 0.3s;
    font-size: 0.88rem;
}

.search-wrapper .input-holder .search-icon {
    width: 42px;
    height: 42px;
    border: none;
    padding: 0;
    outline: none;
    position: relative;
    z-index: 2;
    float: right;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    background: rgba(0, 0, 0, 0.06);
    border-radius: 30px;
}

.search-wrapper .input-holder .search-icon span {
    width: 22px;
    height: 22px;
    display: inline-block;
    vertical-align: middle;
    position: relative;
    transform: rotate(45deg);
    transition: all 0.4s cubic-bezier(0.65, -0.6, 0.24, 1.65);
}

.search-wrapper .input-holder .search-icon span::before,
.search-wrapper .input-holder .search-icon span::after {
    position: absolute;
    content: "";
}

.search-wrapper .input-holder .search-icon span::before {
    width: 4px;
    height: 11px;
    left: 9px;
    top: 13px;
    border-radius: 2px;
    background: #3f6ad8;
}

.search-wrapper .input-holder .search-icon span::after {
    width: 14px;
    height: 14px;
    left: 4px;
    top: 0;
    border-radius: 16px;
    border: 2px solid #3f6ad8;
}

.search-wrapper .close {
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 0;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    cursor: pointer;
    opacity: 0 !important;
    transform: rotate(-180deg);
    transition: all 0.2s cubic-bezier(0.285, -0.45, 0.935, 0.11);
    transition-delay: 0.1s;
}

.search-wrapper .close::before,
.search-wrapper .close::after {
    position: absolute;
    content: "";
    background: #3f6ad8;
    border-radius: 2px;
}

.search-wrapper .close::before {
    width: 2px;
    height: 20px;
    left: 9px;
    top: 0;
}

.search-wrapper .close::after {
    width: 20px;
    height: 2px;
    left: 0;
    top: 9px;
}

.search-wrapper.active {
    width: 330px;
}

.search-wrapper.active .input-holder {
    width: 290px;
    border-radius: 50px;
    background: rgba(0, 0, 0, 0.05);
    transition: all 0.5s cubic-bezier(0, 0.105, 0.035, 1.57);
}

.search-wrapper.active .input-holder .search-input {
    opacity: 1;
    transform: translate(0, 11px);
}

.search-wrapper.active .input-holder .search-icon {
    width: 42px;
    height: 42px;
    margin: 0;
    border-radius: 30px;
}

.search-wrapper.active .input-holder .search-icon span {
    transform: rotate(-45deg);
}

.search-wrapper.active .close {
    left: 300px;
    opacity: 0.6 !important;
    transform: rotate(45deg);
    transition: all 0.6s cubic-bezier(0, 0.105, 0.035, 1.57);
    transition-delay: 0.5s;
}

.search-wrapper.active .close:hover {
    opacity: 1 !important;
}

.search-wrapper.active+.header-menu {
    opacity: 0;
}

.opacity-01 {
    opacity: 0.01 !important;
}

.opacity-02 {
    opacity: 0.02 !important;
}

.opacity-03 {
    opacity: 0.03 !important;
}

.opacity-04 {
    opacity: 0.04 !important;
}

.opacity-05 {
    opacity: 0.05 !important;
}

.opacity-06 {
    opacity: 0.06 !important;
}

.opacity-07 {
    opacity: 0.07 !important;
}

.opacity-08 {
    opacity: 0.08 !important;
}

.opacity-09 {
    opacity: 0.09 !important;
}

.opacity-1 {
    opacity: 0.1 !important;
}

.opacity-15 {
    opacity: 0.15 !important;
}

.opacity-2 {
    opacity: 0.2 !important;
}

.opacity-3 {
    opacity: 0.3 !important;
}

.opacity-4 {
    opacity: 0.4 !important;
}

.opacity-5 {
    opacity: 0.5 !important;
}

.opacity-6 {
    opacity: 0.6 !important;
}

.opacity-7 {
    opacity: 0.7 !important;
}

.opacity-8 {
    opacity: 0.8 !important;
}

.opacity-9 {
    opacity: 0.9 !important;
}

.opacity-10 {
    opacity: 1 !important;
}

.filter-grayscale-5 {
    filter: grayscale(5%) !important;
}

.filter-grayscale-10 {
    filter: grayscale(10%) !important;
}

.filter-grayscale-20 {
    filter: grayscale(20%) !important;
}

.filter-grayscale-30 {
    filter: grayscale(30%) !important;
}

.filter-grayscale-40 {
    filter: grayscale(40%) !important;
}

.filter-grayscale-50 {
    filter: grayscale(50%) !important;
}

.filter-grayscale-80 {
    filter: grayscale(80%) !important;
}

.filter-grayscale-100 {
    filter: grayscale(100%) !important;
}

.br-tl {
    border-top-left-radius: 0.25rem !important;
}

.br-tr {
    border-top-right-radius: 0.25rem !important;
}

.br-bl {
    border-bottom-left-radius: 0.25rem !important;
}

.br-br {
    border-bottom-right-radius: 0.25rem !important;
}

.b-radius-0 {
    border-radius: 0 !important;
}

.rm-border {
    border-width: 0 !important;
}

.br-a {
    border-radius: 0.25rem;
}

.margin-h-center {
    margin-left: auto !important;
    margin-right: auto !important;
}

.center-svg {
    margin: 0 auto;
}

.center-svg svg {
    margin: 0 auto;
}

.apexcharts-canvas {
    margin: 0 auto;
}

.apexcharts-donut {
    display: flex;
    align-items: center;
    align-content: center;
}

.alert-dismissible .close {
    top: 0;
    right: 5px;
    padding: 5px;
}

.icon-gradient {
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
}

.font-size-xlg {
    font-size: 1.3rem !important;
}

.font-size-md {
    font-size: 0.9rem !important;
}

.font-size-lg {
    font-size: 1.1rem !important;
}

.no-shadow {
    box-shadow: 0 0 0 transparent !important;
}


/*
 ---------------------  afeta a altura da barra de pesquisa------------------------------

.h-100 {
    height: 100vh !important;
}
*/

.he-auto {
    height: auto !important;
}

.he-100 {
    height: 100%;
}

.h-sm {
    height: 150px;
}

.text-nowrap {
    white-space: nowrap;
}

.fsize-1 {
    font-size: 0.95rem !important;
}

.fsize-2 {
    font-size: 1.3rem !important;
}

.fsize-3 {
    font-size: 1.6rem !important;
}

.fsize-4 {
    font-size: 2rem !important;
}

.z-index-6 {
    z-index: 6;
}

.line-height-1 {
    line-height: 1;
}

.center-elem {
    display: flex;
    align-items: center;
    align-content: center;
}

.flex2 {
    flex: 2;
}

.divider {
    margin-top: 1rem;
    margin-bottom: 1rem;
    height: 1px;
    overflow: hidden;
    background: #e9ecef;
}

.list-group-item:hover {
    z-index: initial;
}

.no-results {
    padding: 1.5rem;
    text-align: center;
}

.no-results .results-title {
    color: #495057;
    font-size: 1.25rem;
}

.no-results .results-subtitle {
    color: #adb5bd;
    font-size: 1.1rem;
}

.bg-animation {
    animation: bg-pan-left 8s both;
}

@-webkit-keyframes bg-pan-left {
    0% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

@keyframes bg-pan-left {
    0% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.w-100 {
    width: 100%;
}

.mb--2 {
    margin-bottom: -1.5rem;
}

.mbg-3 {
    margin-bottom: 30px;
}

.circle-progress {
    position: relative;
}

.circle-progress small {
    position: absolute;
    height: 100%;
    width: 100%;
    font-weight: bold;
    left: 0;
    top: 0;
    vertical-align: middle;
    text-align: center;
    display: flex;
    align-items: center;
    align-content: center;
}

.circle-progress small span {
    margin: 0 auto;
}

.circle-progress canvas {
    display: block;
}

.bg-warm-flame {
    background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%) !important;
}

.bg-night-fade {
    background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%) !important;
}

.bg-sunny-morning {
    background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%) !important;
}

.bg-tempting-azure {
    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%) !important;
}

.bg-amy-crisp {
    background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%) !important;
}

.bg-heavy-rain {
    background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%) !important;
}

.bg-mean-fruit {
    background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%) !important;
}

.bg-malibu-beach {
    background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%) !important;
}

.bg-deep-blue {
    background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%) !important;
}

.bg-ripe-malin {
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%) !important;
}

.bg-arielle-smile {
    background-image: radial-gradient(circle 248px at center, #16d9e3 0%, #30c7ec 47%, #46aef7 100%) !important;
}

.bg-plum-plate {
    background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
}

.bg-happy-fisher {
    background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%) !important;
}

.bg-happy-itmeo {
    background-image: linear-gradient(180deg, #2af598 0%, #009efd 100%) !important;
}

.bg-mixed-hopes {
    background-image: linear-gradient(to top, #c471f5 0%, #fa71cd 100%) !important;
}

.bg-strong-bliss {
    background-image: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%) !important;
}

.bg-grow-early {
    background-image: linear-gradient(to top, #0ba360 0%, #3cba92 100%) !important;
}

.bg-love-kiss {
    background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%) !important;
}

.bg-premium-dark {
    background-image: linear-gradient(to right, #434343 0%, black 100%) !important;
}

.bg-happy-green {
    background-image: linear-gradient(to bottom, #00b09b, #96c93d) !important;
}

.bg-vicious-stance {
    background-image: linear-gradient(60deg, #29323c 0%, #485563 100%) !important;
}

.bg-midnight-bloom {
    background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%) !important;
}

.bg-night-sky {
    background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%) !important;
}

.bg-slick-carbon {
    background-image: linear-gradient(to bottom, #323232 0%, #3f3f3f 40%, #1c1c1c 150%), linear-gradient(to top, rgba(255, 255, 255, 0.4) 0%, rgba(0, 0, 0, 0.25) 200%) !important;
    background-blend-mode: multiply;
}

.bg-royal {
    background-image: linear-gradient(to right, #141e30, #243b55) !important;
}

.bg-asteroid {
    background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364) !important;
}

.bg-transparent {
    background: transparent !important;
}


/*!
Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT
Copyright (c) 2015 Daniel Eden
*/

body {
    -webkit-backface-visibility: hidden;
}

.animated {
    -webkit-animation-duration: calc(1s);
    animation-duration: calc(1s);
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.animated.infinite {
    animation-iteration-count: infinite;
}

.animated.hinge {
    -webkit-animation-duration: calc(1s * 2);
    animation-duration: calc(1s * 2);
}

.animated.bounceIn,
.animated.bounceOut {
    -webkit-animation-duration: calc(1s * 0.75);
    animation-duration: calc(1s * 0.75);
}

.animated.flipOutX,
.animated.flipOutY {
    -webkit-animation-duration: calc(1s * 0.75);
    animation-duration: calc(1s * 0.75);
}

@-webkit-keyframes bounce {
    0%,
    20%,
    50%,
    80%,
    100% {
        -webkit-transform: translateY(0);
    }
    40% {
        -webkit-transform: translateY(-30px);
    }
    60% {
        -webkit-transform: translateY(-15px);
    }
}

@keyframes bounce {
    0%,
    20%,
    50%,
    80%,
    100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-30px);
    }
    60% {
        transform: translateY(-15px);
    }
}

.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce;
}

@-webkit-keyframes flash {
    0%,
    50%,
    100% {
        opacity: 1;
    }
    25%,
    75% {
        opacity: 0;
    }
}

@keyframes flash {
    0%,
    50%,
    100% {
        opacity: 1;
    }
    25%,
    75% {
        opacity: 0;
    }
}

.flash {
    -webkit-animation-name: flash;
    animation-name: flash;
}

@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
    }
    50% {
        -webkit-transform: scale(1.1);
    }
    100% {
        -webkit-transform: scale(1);
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

.pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse;
}

@-webkit-keyframes shake {
    0%,
    100% {
        -webkit-transform: translateX(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translateX(-10px);
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translateX(10px);
    }
}

@keyframes shake {
    0%,
    100% {
        transform: translateX(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        transform: translateX(-10px);
    }
    20%,
    40%,
    60%,
    80% {
        transform: translateX(10px);
    }
}

.shake {
    -webkit-animation-name: shake;
    animation-name: shake;
}

@-webkit-keyframes swing {
    20%,
    40%,
    60%,
    80%,
    100% {
        -webkit-transform-origin: top center;
    }
    20% {
        -webkit-transform: rotate(15deg);
    }
    40% {
        -webkit-transform: rotate(-10deg);
    }
    60% {
        -webkit-transform: rotate(5deg);
    }
    80% {
        -webkit-transform: rotate(-5deg);
    }
    100% {
        -webkit-transform: rotate(0deg);
    }
}

@keyframes swing {
    20% {
        transform: rotate(15deg);
    }
    40% {
        transform: rotate(-10deg);
    }
    60% {
        transform: rotate(5deg);
    }
    80% {
        transform: rotate(-5deg);
    }
    100% {
        transform: rotate(0deg);
    }
}

.swing {
    -webkit-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    animation-name: swing;
}

@-webkit-keyframes wiggle {
    0% {
        -webkit-transform: skewX(9deg);
    }
    10% {
        -webkit-transform: skewX(-8deg);
    }
    20% {
        -webkit-transform: skewX(7deg);
    }
    30% {
        -webkit-transform: skewX(-6deg);
    }
    40% {
        -webkit-transform: skewX(5deg);
    }
    50% {
        -webkit-transform: skewX(-4deg);
    }
    60% {
        -webkit-transform: skewX(3deg);
    }
    70% {
        -webkit-transform: skewX(-2deg);
    }
    80% {
        -webkit-transform: skewX(1deg);
    }
    90% {
        -webkit-transform: skewX(0deg);
    }
    100% {
        -webkit-transform: skewX(0deg);
    }
}

@keyframes wiggle {
    0% {
        transform: skewX(9deg);
    }
    10% {
        transform: skewX(-8deg);
    }
    20% {
        transform: skewX(7deg);
    }
    30% {
        transform: skewX(-6deg);
    }
    40% {
        transform: skewX(5deg);
    }
    50% {
        transform: skewX(-4deg);
    }
    60% {
        transform: skewX(3deg);
    }
    70% {
        transform: skewX(-2deg);
    }
    80% {
        transform: skewX(1deg);
    }
    90% {
        transform: skewX(0deg);
    }
    100% {
        transform: skewX(0deg);
    }
}

.wiggle {
    -webkit-animation-name: wiggle;
    animation-name: wiggle;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
}

@-webkit-keyframes wobble {
    0% {
        -webkit-transform: translateX(0%);
    }
    15% {
        -webkit-transform: translateX(-25%) rotate(-5deg);
    }
    30% {
        -webkit-transform: translateX(20%) rotate(3deg);
    }
    45% {
        -webkit-transform: translateX(-15%) rotate(-3deg);
    }
    60% {
        -webkit-transform: translateX(10%) rotate(2deg);
    }
    75% {
        -webkit-transform: translateX(-5%) rotate(-1deg);
    }
    100% {
        -webkit-transform: translateX(0%);
    }
}

@keyframes wobble {
    0% {
        transform: translateX(0%);
    }
    15% {
        transform: translateX(-25%) rotate(-5deg);
    }
    30% {
        transform: translateX(20%) rotate(3deg);
    }
    45% {
        transform: translateX(-15%) rotate(-3deg);
    }
    60% {
        transform: translateX(10%) rotate(2deg);
    }
    75% {
        transform: translateX(-5%) rotate(-1deg);
    }
    100% {
        transform: translateX(0%);
    }
}

.wobble {
    -webkit-animation-name: wobble;
    animation-name: wobble;
}

@-webkit-keyframes tada {
    0% {
        -webkit-transform: scale(1);
    }
    10%,
    20% {
        -webkit-transform: scale(0.9) rotate(-3deg);
    }
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale(1.1) rotate(3deg);
    }
    40%,
    60%,
    80% {
        -webkit-transform: scale(1.1) rotate(-3deg);
    }
    100% {
        -webkit-transform: scale(1) rotate(0);
    }
}

@keyframes tada {
    0% {
        transform: scale(1);
    }
    10%,
    20% {
        transform: scale(0.9) rotate(-3deg);
    }
    30%,
    50%,
    70%,
    90% {
        transform: scale(1.1) rotate(3deg);
    }
    40%,
    60%,
    80% {
        transform: scale(1.1) rotate(-3deg);
    }
    100% {
        transform: scale(1) rotate(0);
    }
}

.tada {
    -webkit-animation-name: tada;
    animation-name: tada;
}

@-webkit-keyframes bounceIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.3);
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.05);
    }
    70% {
        -webkit-transform: scale(0.9);
    }
    100% {
        -webkit-transform: scale(1);
    }
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(0.3);
    }
    50% {
        opacity: 1;
        transform: scale(1.05);
    }
    70% {
        transform: scale(0.9);
    }
    100% {
        transform: scale(1);
    }
}

.bounceIn {
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn;
}

@-webkit-keyframes bounceInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(30px);
    }
    80% {
        -webkit-transform: translateY(-10px);
    }
    100% {
        -webkit-transform: translateY(0);
    }
}

@keyframes bounceInDown {
    0% {
        opacity: 0;
        transform: translateY(-2000px);
    }
    60% {
        opacity: 1;
        transform: translateY(30px);
    }
    80% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}

.bounceInDown {
    -webkit-animation-name: bounceInDown;
    animation-name: bounceInDown;
}

@-webkit-keyframes bounceInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(30px);
    }
    80% {
        -webkit-transform: translateX(-10px);
    }
    100% {
        -webkit-transform: translateX(0);
    }
}

@keyframes bounceInLeft {
    0% {
        opacity: 0;
        transform: translateX(-2000px);
    }
    60% {
        opacity: 1;
        transform: translateX(30px);
    }
    80% {
        transform: translateX(-10px);
    }
    100% {
        transform: translateX(0);
    }
}

.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(-30px);
    }
    80% {
        -webkit-transform: translateX(10px);
    }
    100% {
        -webkit-transform: translateX(0);
    }
}

@keyframes bounceInRight {
    0% {
        opacity: 0;
        transform: translateX(2000px);
    }
    60% {
        opacity: 1;
        transform: translateX(-30px);
    }
    80% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(0);
    }
}

.bounceInRight {
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight;
}

@-webkit-keyframes bounceInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(-30px);
    }
    80% {
        -webkit-transform: translateY(10px);
    }
    100% {
        -webkit-transform: translateY(0);
    }
}

@keyframes bounceInUp {
    0% {
        opacity: 0;
        transform: translateY(2000px);
    }
    60% {
        opacity: 1;
        transform: translateY(-30px);
    }
    80% {
        transform: translateY(10px);
    }
    100% {
        transform: translateY(0);
    }
}

.bounceInUp {
    -webkit-animation-name: bounceInUp;
    animation-name: bounceInUp;
}

@-webkit-keyframes bounceOut {
    0% {
        -webkit-transform: scale(1);
    }
    25% {
        -webkit-transform: scale(0.95);
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.1);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(0.3);
    }
}

@keyframes bounceOut {
    0% {
        transform: scale(1);
    }
    25% {
        transform: scale(0.95);
    }
    50% {
        opacity: 1;
        transform: scale(1.1);
    }
    100% {
        opacity: 0;
        transform: scale(0.3);
    }
}

.bounceOut {
    -webkit-animation-name: bounceOut;
    animation-name: bounceOut;
}

@-webkit-keyframes bounceOutDown {
    0% {
        -webkit-transform: translateY(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(-20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }
}

@keyframes bounceOutDown {
    0% {
        transform: translateY(0);
    }
    20% {
        opacity: 1;
        transform: translateY(-20px);
    }
    100% {
        opacity: 0;
        transform: translateY(2000px);
    }
}

.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    animation-name: bounceOutDown;
}

@-webkit-keyframes bounceOutLeft {
    0% {
        -webkit-transform: translateX(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }
}

@keyframes bounceOutLeft {
    0% {
        transform: translateX(0);
    }
    20% {
        opacity: 1;
        transform: translateX(20px);
    }
    100% {
        opacity: 0;
        transform: translateX(-2000px);
    }
}

.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft;
}

@-webkit-keyframes bounceOutRight {
    0% {
        -webkit-transform: translateX(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }
}

@keyframes bounceOutRight {
    0% {
        transform: translateX(0);
    }
    20% {
        opacity: 1;
        transform: translateX(-20px);
    }
    100% {
        opacity: 0;
        transform: translateX(2000px);
    }
}

.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    animation-name: bounceOutRight;
}

@-webkit-keyframes bounceOutUp {
    0% {
        -webkit-transform: translateY(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }
}

@keyframes bounceOutUp {
    0% {
        transform: translateY(0);
    }
    20% {
        opacity: 1;
        transform: translateY(20px);
    }
    100% {
        opacity: 0;
        transform: translateY(-2000px);
    }
}

.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    animation-name: bounceOutUp;
}

@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
}

@-webkit-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@keyframes fadeInDownBig {
    0% {
        opacity: 0;
        transform: translateY(-2000px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig;
}

@-webkit-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    0% {
        opacity: 0;
        transform: translateX(-20px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        transform: translateX(-2000px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig;
}

@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        transform: translateX(20px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}

@-webkit-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
}

@keyframes fadeInRightBig {
    0% {
        opacity: 0;
        transform: translateX(2000px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig;
}

@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

@-webkit-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
}

@keyframes fadeInUpBig {
    0% {
        opacity: 0;
        transform: translateY(2000px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
}

@-webkit-keyframes fadeOutDown {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(20px);
    }
}

@keyframes fadeOutDown {
    0% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(20px);
    }
}

.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
    }
}

@keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(2000px);
    }
}

.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig;
}

@-webkit-keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
    }
}

@keyframes fadeOutLeft {
    0% {
        opacity: 1;
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        transform: translateX(-20px);
    }
}

.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft;
}

@-webkit-keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
    }
}

@keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        transform: translateX(-2000px);
    }
}

.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig;
}

@-webkit-keyframes fadeOutRight {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(20px);
    }
}

@keyframes fadeOutRight {
    0% {
        opacity: 1;
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        transform: translateX(20px);
    }
}

.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    animation-name: fadeOutRight;
}

@-webkit-keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
    }
}

@keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        transform: translateX(2000px);
    }
}

.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig;
}

@-webkit-keyframes fadeOutUp {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
    }
}

@keyframes fadeOutUp {
    0% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(-20px);
    }
}

.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    animation-name: fadeOutUp;
}

@-webkit-keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
    }
}

@keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(-2000px);
    }
}

.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig;
}

@-webkit-keyframes flip {
    0% {
        -webkit-transform: perspective(400px) rotateY(0);
        -webkit-animation-timing-function: ease-out;
    }
    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
        -webkit-animation-timing-function: ease-out;
    }
    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
        -webkit-animation-timing-function: ease-in;
    }
    80% {
        -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
        -webkit-animation-timing-function: ease-in;
    }
    100% {
        -webkit-transform: perspective(400px) scale(1);
        -webkit-animation-timing-function: ease-in;
    }
}

@keyframes flip {
    0% {
        transform: perspective(400px) rotateY(0);
        animation-timing-function: ease-out;
    }
    40% {
        transform: perspective(400px) translateZ(150px) rotateY(170deg);
        animation-timing-function: ease-out;
    }
    50% {
        transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
        animation-timing-function: ease-in;
    }
    80% {
        transform: perspective(400px) rotateY(360deg) scale(0.95);
        animation-timing-function: ease-in;
    }
    100% {
        transform: perspective(400px) scale(1);
        animation-timing-function: ease-in;
    }
}

.flip {
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flip;
    animation-name: flip;
}

@-webkit-keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateX(-10deg);
    }
    70% {
        -webkit-transform: perspective(400px) rotateX(10deg);
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

@keyframes flipInX {
    0% {
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
    40% {
        transform: perspective(400px) rotateX(-10deg);
    }
    70% {
        transform: perspective(400px) rotateX(10deg);
    }
    100% {
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

.flipInX {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX;
}

@-webkit-keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateY(-10deg);
    }
    70% {
        -webkit-transform: perspective(400px) rotateY(10deg);
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

@keyframes flipInY {
    0% {
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
    40% {
        transform: perspective(400px) rotateY(-10deg);
    }
    70% {
        transform: perspective(400px) rotateY(10deg);
    }
    100% {
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

.flipInY {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY;
}

@-webkit-keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

@keyframes flipOutX {
    0% {
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
    100% {
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

.flipOutX {
    -webkit-animation-name: flipOutX;
    animation-name: flipOutX;
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
}

@-webkit-keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

@keyframes flipOutY {
    0% {
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
    100% {
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

.flipOutY {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipOutY;
    animation-name: flipOutY;
}

@-webkit-keyframes lightSpeedIn {
    0% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
    60% {
        -webkit-transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

@keyframes lightSpeedIn {
    0% {
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
    60% {
        transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }
    80% {
        transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }
    100% {
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

.lightSpeedIn {
    -webkit-animation-name: lightSpeedIn;
    animation-name: lightSpeedIn;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}

@-webkit-keyframes lightSpeedOut {
    0% {
        -webkit-transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

@keyframes lightSpeedOut {
    0% {
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
    100% {
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

.lightSpeedOut {
    -webkit-animation-name: lightSpeedOut;
    animation-name: lightSpeedOut;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
}

@-webkit-keyframes rotateIn {
    0% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(-200deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateIn {
    0% {
        transform-origin: center center;
        transform: rotate(-200deg);
        opacity: 0;
    }
    100% {
        transform-origin: center center;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn;
}

@-webkit-keyframes rotateInDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInDownLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft;
}

@-webkit-keyframes rotateInDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInDownRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight;
}

@-webkit-keyframes rotateInUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInUpLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft;
}

@-webkit-keyframes rotateInUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInUpRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight;
}

@-webkit-keyframes rotateOut {
    0% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: center center;
        -webkit-transform: rotate(200deg);
        opacity: 0;
    }
}

@keyframes rotateOut {
    0% {
        transform-origin: center center;
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        transform-origin: center center;
        transform: rotate(200deg);
        opacity: 0;
    }
}

.rotateOut {
    -webkit-animation-name: rotateOut;
    animation-name: rotateOut;
}

@-webkit-keyframes rotateOutDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }
}

@keyframes rotateOutDownLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        transform-origin: left bottom;
        transform: rotate(90deg);
        opacity: 0;
    }
}

.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft;
}

@-webkit-keyframes rotateOutDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }
}

@keyframes rotateOutDownRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        transform-origin: right bottom;
        transform: rotate(-90deg);
        opacity: 0;
    }
}

.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight;
}

@-webkit-keyframes rotateOutUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        opacity: 0;
    }
}

@keyframes rotateOutUpLeft {
    0% {
        transform-origin: left bottom;
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -transform-origin: left bottom;
        -transform: rotate(-90deg);
        opacity: 0;
    }
}

.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft;
}

@-webkit-keyframes rotateOutUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        opacity: 0;
    }
}

@keyframes rotateOutUpRight {
    0% {
        transform-origin: right bottom;
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        transform-origin: right bottom;
        transform: rotate(90deg);
        opacity: 0;
    }
}

.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight;
}

@-webkit-keyframes slideInDown {
    0% {
        -webkit-transform: translate3d(0, -100%, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInDown {
    0% {
        transform: translate3d(0, -100%, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(0, 0, 0);
    }
}

.slideInDown {
    -webkit-animation-name: slideInDown;
    animation-name: slideInDown;
}

@-webkit-keyframes slideInLeft {
    0% {
        -webkit-transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInLeft {
    0% {
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(0, 0, 0);
    }
}

.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft;
}

@-webkit-keyframes slideInRight {
    0% {
        -webkit-transform: translate3d(100%, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInRight {
    0% {
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(0, 0, 0);
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight;
}

@-webkit-keyframes slideInUp {
    0% {
        -webkit-transform: translate3d(0, 100%, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInUp {
    0% {
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(0, 0, 0);
    }
}

.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp;
}

@-webkit-keyframes slideOutDown {
    0% {
        -webkit-transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(0, 100%, 0);
    }
}

@keyframes slideOutDown {
    0% {
        transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(0, 100%, 0);
    }
}

.slideOutDown {
    -webkit-animation-name: slideOutDown;
    animation-name: slideOutDown;
}

@-webkit-keyframes slideOutLeft {
    0% {
        -webkit-transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(-100%, 0, 0);
    }
}

@keyframes slideOutLeft {
    0% {
        transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(-100%, 0, 0);
    }
}

.slideOutLeft {
    -webkit-animation-name: slideOutLeft;
    animation-name: slideOutLeft;
}

@-webkit-keyframes slideOutRight {
    0% {
        -webkit-transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(100%, 0, 0);
    }
}

@keyframes slideOutRight {
    0% {
        transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(100%, 0, 0);
    }
}

.slideOutRight {
    -webkit-animation-name: slideOutRight;
    animation-name: slideOutRight;
}

@-webkit-keyframes slideOutUp {
    0% {
        -webkit-transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(0, -100%, 0);
    }
}

@keyframes slideOutUp {
    0% {
        transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        transform: translate3d(0, -100%, 0);
    }
}

.slideOutUp {
    -webkit-animation-name: slideOutUp;
    animation-name: slideOutUp;
}

@-webkit-keyframes hinge {
    0% {
        -webkit-transform: rotate(0);
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }
    20%,
    60% {
        -webkit-transform: rotate(80deg);
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }
    40% {
        -webkit-transform: rotate(60deg);
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }
    80% {
        -webkit-transform: rotate(60deg) translateY(0);
        opacity: 1;
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
    }
    100% {
        -webkit-transform: translateY(700px);
        opacity: 0;
    }
}

@keyframes hinge {
    0% {
        transform: rotate(0);
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }
    20%,
    60% {
        transform: rotate(80deg);
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }
    40% {
        transform: rotate(60deg);
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }
    80% {
        transform: rotate(60deg) translateY(0);
        opacity: 1;
        transform-origin: top left;
        animation-timing-function: ease-in-out;
    }
    100% {
        transform: translateY(700px);
        opacity: 0;
    }
}

.hinge {
    -webkit-animation-name: hinge;
    animation-name: hinge;
}

@-webkit-keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%) rotate(-120deg);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
    }
}

@keyframes rollIn {
    0% {
        opacity: 0;
        transform: translateX(-100%) rotate(-120deg);
    }
    100% {
        opacity: 1;
        transform: translateX(0px) rotate(0deg);
    }
}

.rollIn {
    -webkit-animation-name: rollIn;
    animation-name: rollIn;
}

@-webkit-keyframes rollOut {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(100%) rotate(120deg);
    }
}

@keyframes rollOut {
    0% {
        opacity: 1;
        transform: translateX(0px) rotate(0deg);
    }
    100% {
        opacity: 0;
        transform: translateX(100%) rotate(120deg);
    }
}

.rollOut {
    -webkit-animation-name: rollOut;
    animation-name: rollOut;
}

@-webkit-keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
    }
    50% {
        opacity: 1;
    }
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale3d(0.3, 0.3, 0.3);
    }
    50% {
        opacity: 1;
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn;
}

@-webkit-keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

@keyframes zoomInDown {
    0% {
        opacity: 0;
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

.zoomInDown {
    -webkit-animation-name: zoomInDown;
    animation-name: zoomInDown;
}

@-webkit-keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

@keyframes zoomInLeft {
    0% {
        opacity: 0;
        transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft;
}

@-webkit-keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

@keyframes zoomInRight {
    0% {
        opacity: 0;
        transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight;
}

@-webkit-keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

@keyframes zoomInUp {
    0% {
        opacity: 0;
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    60% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

.zoomInUp {
    -webkit-animation-name: zoomInUp;
    animation-name: zoomInUp;
}

@-webkit-keyframes zoomOut {
    0% {
        opacity: 1;
    }
    50% {
        opacity: 0;
        -webkit-transform: scale3d(0.3, 0.3, 0.3);
    }
    100% {
        opacity: 0;
    }
}

@keyframes zoomOut {
    0% {
        opacity: 1;
    }
    50% {
        opacity: 0;
        transform: scale3d(0.3, 0.3, 0.3);
    }
    100% {
        opacity: 0;
    }
}

.zoomOut {
    -webkit-animation-name: zoomOut;
    animation-name: zoomOut;
}

@-webkit-keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
        -webkit-transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

@keyframes zoomOutDown {
    40% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    100% {
        opacity: 0;
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
        transform-origin: center bottom;
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

.zoomOutDown {
    -webkit-animation-name: zoomOutDown;
    animation-name: zoomOutDown;
}

@-webkit-keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale3d(0.1) translate3d(-2000px, 0, 0);
        -webkit-transform-origin: left center;
    }
}

@keyframes zoomOutLeft {
    40% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    }
    100% {
        opacity: 0;
        transform: scale3d(0.1) translate3d(-2000px, 0, 0);
        transform-origin: left center;
    }
}

.zoomOutLeft {
    -webkit-animation-name: zoomOutLeft;
    animation-name: zoomOutLeft;
}

@-webkit-keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale3d(0.1) translate3d(2000px, 0, 0);
        -webkit-transform-origin: right center;
    }
}

@keyframes zoomOutRight {
    40% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    }
    100% {
        opacity: 0;
        transform: scale3d(0.1) translate3d(2000px, 0, 0);
        transform-origin: right center;
    }
}

.zoomOutRight {
    -webkit-animation-name: zoomOutRight;
    animation-name: zoomOutRight;
}

@-webkit-keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
        -webkit-transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

@keyframes zoomOutUp {
    40% {
        opacity: 1;
        transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    100% {
        opacity: 0;
        transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
        transform-origin: center bottom;
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    }
}

.zoomOutUp {
    -webkit-animation-name: zoomOutUp;
    animation-name: zoomOutUp;
}

.dropdown-menu.show {
    animation: fade-in2 0.2s cubic-bezier(0.39, 0.575, 0.565, 1) both;
}

.popover:not([data-placement^="top"]).show {
    animation: fade-in2 0.2s cubic-bezier(0.39, 0.575, 0.565, 1) both;
}

.dropdown-menu[data-placement^="top"].show {
    animation: fade-in3 0.2s cubic-bezier(0.39, 0.575, 0.565, 1) both;
    bottom: auto !important;
    top: auto !important;
}

@keyframes fade-in2 {
    0% {
        margin-top: -50px;
        visibility: hidden;
        opacity: 0;
    }
    100% {
        margin-top: 0px;
        visibility: visible;
        opacity: 1;
    }
}

.form-control {
    transition: all 0.2s;
}

.dropdown-toggle::after {
    position: relative;
    top: 2px;
    opacity: 0.8;
}

.dropright .dropdown-toggle::after {
    top: 0;
}

.dropdown-toggle-split {
    border-left: rgba(255, 255, 255, 0.1) solid 1px;
}

.btn-outline-primary {
    color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-outline-primary:focus,
.btn-outline-primary.focus {
    box-shadow: 0 0 0 0 rgba(63, 106, 216, 0.5);
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: #3f6ad8;
    background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(63, 106, 216, 0.5);
}

.btn-outline-primary.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(63, 106, 216, 0.4), 0 0.0625rem 0.125rem rgba(63, 106, 216, 0.5);
}

.btn-outline-primary.btn-shadow.active:hover,
.btn-outline-primary.btn-shadow.disabled:hover,
.btn-outline-primary.btn-shadow:active:hover,
.btn-outline-primary.btn-shadow:disabled:hover {
    box-shadow: 0 0.125rem 0.625rem rgba(63, 106, 216, 0.5), 0 0.0625rem 0.125rem rgba(63, 106, 216, 0.6);
}

.btn-outline-primary.btn-shadow:hover {
    box-shadow: 0px 5px 15px 2px rgba(63, 106, 216, 0.19);
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:focus,
.btn-outline-secondary.focus {
    box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active,
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(108, 117, 125, 0.4), 0 0.0625rem 0.125rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.btn-shadow.active:hover,
.btn-outline-secondary.btn-shadow.disabled:hover,
.btn-outline-secondary.btn-shadow:active:hover,
.btn-outline-secondary.btn-shadow:disabled:hover {
    box-shadow: 0 0.125rem 0.625rem rgba(108, 117, 125, 0.5), 0 0.0625rem 0.125rem rgba(108, 117, 125, 0.6);
}

.btn-outline-secondary.btn-shadow:hover {
    box-shadow: 0px 5px 15px 2px rgba(108, 117, 125, 0.19);
}

.btn-outline-success {
    color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:focus,
.btn-outline-success.focus {
    box-shadow: 0 0 0 0 rgba(58, 196, 125, 0.5);
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #3ac47d;
    background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active,
.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(58, 196, 125, 0.5);
}

.btn-outline-success.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(58, 196, 125, 0.4), 0 0.0625rem 0.125rem rgba(58, 196, 125, 0.5);
}

.btn-outline-success.btn-shadow.active:hover,
.btn-outline-success.btn-shadow.disabled:hover,
.btn-outline-success.btn-shadow:active:hover,
.btn-outline-success.btn-shadow:disabled:hover {
    box-shadow: 0 0.125rem 0.625rem rgba(58, 196, 125, 0.5), 0 0.0625rem 0.125rem rgba(58, 196, 125, 0.6);
}

.btn-outline-success.btn-shadow:hover {
    box-shadow: 0px 5px 15px 2px rgba(58, 196, 125, 0.19);
}

.btn-outline-info {
    color: #16aaff;
    border-color: #16aaff;
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #16aaff;
    border-color: #16aaff;
}

.btn-outline-info:focus,
.btn-outline-info.focus {
    box-shadow: 0 0 0 0 rgba(22, 170, 255, 0.5);
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #16aaff;
    background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active,
.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #16aaff;
    border-color: #16aaff;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(22, 170, 255, 0.5);
}

.btn-outline-info.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(22, 170, 255, 0.4), 0 0.0625rem 0.125rem rgba(22, 170, 255, 0.5);
}

.btn-outline-info.btn-shadow.active:hover,
.btn-outline-info.btn-shadow.disabled:hover,
.btn-outline-info.btn-shadow:active:hover,
.btn-outline-info.btn-shadow:disabled:hover {
    box-shadow: 0 0.125rem 0.625rem rgba(22, 170, 255, 0.5), 0 0.0625rem 0.125rem rgba(22, 170, 255, 0.6);
}

.btn-outline-info.btn-shadow:hover {
    box-shadow: 0px 5px 15px 2px rgba(22, 170, 255, 0.19);
}

.btn-outline-warning {
    color: #f7b924;
    border-color: #f7b924;
}

.btn-outline-warning:hover {
    color: #212529;
    background-color: #f7b924;
    border-color: #f7b924;
}

.btn-outline-warning:focus,
.btn-outline-warning.focus {
    box-shadow: 0 0 0 0 rgba(247, 185, 36, 0.5);
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #f7b924;
    background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active,
.show>.btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #f7b924;
    border-color: #f7b924;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 0 rgba(247, 185, 36, 0.5);
}

.btn-outline-warning.btn-shadow {
    box-shadow: 0 0.125rem 0.625rem rgba(247, 185, 36, 0.4), 0 0.0625rem 0.125rem rgba(247, 185, 36, 0.5);
}

.btn-outline-warning.btn-shadow.active:hover,
.btn-outline-warning.btn-shadow.disabled:hover,
.btn-outline-warning.btn-shadow:active:hover,
.btn-outline-warning.btn-shadow:disabled:hover {
    box-shadow: 0 0.125rem 0.625rem rgba(247, 185, 36, 0.5), 0 0.0625rem 0.125rem rgba(247, 185, 36, 0.6);
}

.btn-outline-warning.btn-shadow:hover {
    box-shadow: 0px 5px 15px 2px rgba(247, 185, 36, 0.19);
}

.btn-outline-danger {
    color: #d92550;
    border-color: #d92550;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #d92550;
    border-color: #d92550;
}

.btn-outline-danger:focus,
.btn-outline-danger.focus {
    box-shadow: 0 0 0 0 rgba(217, 37, 80, 0.5);
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #d92550;
    background-color: transparent;
}

.sr-only {
    border: 0;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

.fa-2x {
    line-height: 2;
}

@font-face {
    font-family: "Pe-icon-7-stroke";
    src: url(assets/fonts/Pe-icon-7-stroke.eot);
    src: url(assets/fonts/Pe-icon-7-stroke.eot?#iefixd7yf1v) format("embedded-opentype"), url(assets/fonts/Pe-icon-7-stroke.woff) format("woff"), url(assets/fonts/Pe-icon-7-stroke.ttf) format("truetype"), url(assets/fonts/Pe-icon-7-stroke.svg#Pe-icon-7-stroke) format("svg");
    font-weight: normal;
    font-style: normal;
}

[class^="pe-7s-"],
[class*=" pe-7s-"] {
    display: inline-block;
    font-family: "Pe-icon-7-stroke";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}


/*! Modified from font-awesome helper CSS classes - PIXEDEN
 *  Font Awesome 4.0.3 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (CSS: MIT License)
 */

.pe-lg {
    font-size: 1.1704rem;
    line-height: 0.75em;
    vertical-align: -15%;
}

.pe-2x {
    font-size: 1.76rem;
}

.pe-3x {
    font-size: 2.64rem;
}

.pe-4x {
    font-size: 3.52rem;
}

.pe-5x {
    font-size: 4.4rem;
}

.pe-fw {
    width: 1.2857142857142858em;
    text-align: center;
}

.pe-ul {
    padding-left: 0;
    margin-left: 2.142857142857143em;
    list-style-type: none;
}

.pe-ul>li {
    position: relative;
}

.pe-li {
    position: absolute;
    left: -2.142857142857143em;
    width: 2.142857142857143em;
    top: 0.14285714285714285em;
    text-align: center;
}

.pe-li.pe-lg {
    left: -1.8571428571428572em;
}

.pe-border {
    padding: 0.2em 0.25em 0.15em;
    border: solid 0.08em #eeeeee;
    border-radius: 0.1em;
}

.pull-right {
    float: right;
}

.pe.pull-left {
    float: left;
    margin-right: 0.3em;
    margin-left: 0.3em;
}

.pe-spin {
    animation: spin 2s infinite linear;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(359deg);
    }
}

.pe-rotate-90 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=1);
    transform: rotate(90deg);
}

.pe-rotate-180 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    transform: rotate(180deg);
}

.pe-rotate-270 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=3);
    transform: rotate(270deg);
}

.pe-flip-horizontal {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
    transform: scale(-1, 1);
}

.pe-flip-vertical {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
    transform: scale(1, -1);
}

.pe-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: middle;
}

.pe-stack-1x,
.pe-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center;
}

.pe-stack-1x {
    line-height: inherit;
}

.pe-stack-2x {
    font-size: 2em;
}

.pe-inverse {
    color: #ffffff;
}

.pe-va {
    vertical-align: middle;
}

.pe-border {
    border: solid 0.08em #eaeaea;
}


.hamburger {
    padding: 0px 0px;
    display: inline-block;
    cursor: pointer;
    transition-property: opacity, filter;
    transition-duration: 0.15s;
    transition-timing-function: linear;
    font: inherit;
    color: inherit;
    text-transform: none;
    background-color: transparent;
    border: 0;
    margin: 0;
    overflow: visible;
}

.hamburger:hover {
    opacity: 0.7;
}

.hamburger.is-active:hover {
    opacity: 0.7;
}

.hamburger.is-active .hamburger-inner,
.hamburger.is-active .hamburger-inner::before,
.hamburger.is-active .hamburger-inner::after {
    background-color: #3f6ad8;
}

.hamburger-box {
    width: 24px;
    height: 14px;
    display: inline-block;
    position: relative;
}

.hamburger-inner {
    display: block;
    top: 50%;
    margin-top: -1px;
}

.hamburger-inner,
.hamburger-inner::before,
.hamburger-inner::after {
    width: 24px;
    height: 2px;
    background-color: #3f6ad8;
    border-radius: 10px;
    position: absolute;
    transition-property: transform;
    transition-duration: 0.15s;
    transition-timing-function: ease;
}

.hamburger-inner::before,
.hamburger-inner::after {
    content: "";
    display: block;
}

.hamburger-inner::before {
    top: -6px;
}

.hamburger-inner::after {
    bottom: -6px;
}

.hamburger--elastic .hamburger-inner {
    top: 1px;
    transition-duration: 0.275s;
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.hamburger--elastic .hamburger-inner::before {
    top: 6px;
    transition: opacity 0.125s 0.275s ease;
}

.hamburger--elastic .hamburger-inner::after {
    top: 12px;
    transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.hamburger--elastic.is-active .hamburger-inner {
    transform: translate3d(0, 6px, 0) rotate(135deg);
    transition-delay: 0.075s;
}

.hamburger--elastic.is-active .hamburger-inner::before {
    transition-delay: 0s;
    opacity: 0;
}

.hamburger--elastic.is-active .hamburger-inner::after {
    transform: translate3d(0, -12px, 0) rotate(-270deg);
    transition-delay: 0.075s;
}

.toast-title {
    font-weight: bold;
}

.toast-message {
    -ms-word-wrap: break-word;
    word-wrap: break-word;
}

.toast-message a,
.toast-message label {
    color: #fff;
}

.toast-message a:hover {
    color: #cccccc;
    text-decoration: none;
}

.toast-close-button {
    position: relative;
    right: -0.3em;
    top: -0.3em;
    float: right;
    font-weight: bold;
    color: #fff;
    opacity: 0.8;
}

.toast-close-button:hover,
.toast-close-button:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    opacity: 0.4;
}

button.toast-close-button {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
}

.toast-top-center {
    top: 0;
    right: 0;
    width: 100%;
}

.toast-bottom-center {
    bottom: 0;
    right: 0;
    width: 100%;
}

.toast-top-full-width {
    top: 0;
    right: 0;
    width: 100%;
}

.toast-bottom-full-width {
    bottom: 0;
    right: 0;
    width: 100%;
}

.toast-top-left {
    top: 12px;
    left: 12px;
}

.toast-top-right {
    top: 12px;
    right: 12px;
}

.toast-bottom-right {
    right: 12px;
    bottom: 12px;
}

.toast-bottom-left {
    bottom: 12px;
    left: 12px;
}

#toast-container {
    position: fixed;
    z-index: 999999;
}

#toast-container * {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

#toast-container>div {
    position: relative;
    overflow: hidden;
    margin: 0 0 0.6rem;
    padding: 0.6rem 0.6rem 0.6rem 50px;
    width: 300px;
    border-radius: 0.25rem;
    background-position: 15px center;
    background-repeat: no-repeat;
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    color: #fff;
    opacity: 0.9;
}

#toast-container>div:hover {
    opacity: 1;
    cursor: pointer;
}

#toast-container>.toast-info {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=") !important;
    box-shadow: 0 0.66875rem 2.3875rem rgba(22, 170, 255, 0.03), 0 1.1375rem 1.60625rem rgba(22, 170, 255, 0.03), 0 0.45rem 0.73125rem rgba(22, 170, 255, 0.05), 0 0.325rem 0.3875rem rgba(22, 170, 255, 0.03);
}

#toast-container>.toast-error {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=") !important;
    box-shadow: 0 0.66875rem 2.3875rem rgba(217, 37, 80, 0.03), 0 1.1375rem 1.60625rem rgba(217, 37, 80, 0.03), 0 0.45rem 0.73125rem rgba(217, 37, 80, 0.05), 0 0.325rem 0.3875rem rgba(217, 37, 80, 0.03);
}

#toast-container>.toast-success {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==") !important;
    box-shadow: 0 0.66875rem 2.3875rem rgba(58, 196, 125, 0.03), 0 1.1375rem 1.60625rem rgba(58, 196, 125, 0.03), 0 0.45rem 0.73125rem rgba(58, 196, 125, 0.05), 0 0.325rem 0.3875rem rgba(58, 196, 125, 0.03);
}

#toast-container>.toast-warning {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=") !important;
    box-shadow: 0 0.66875rem 2.3875rem rgba(247, 185, 36, 0.03), 0 1.1375rem 1.60625rem rgba(247, 185, 36, 0.03), 0 0.45rem 0.73125rem rgba(247, 185, 36, 0.05), 0 0.325rem 0.3875rem rgba(247, 185, 36, 0.03);
    color: #212529;
}

#toast-container.toast-top-center>div,
#toast-container.toast-bottom-center>div {
    width: 300px;
    margin-left: auto;
    margin-right: auto;
}

#toast-container.toast-top-full-width>div,
#toast-container.toast-bottom-full-width>div {
    width: 96%;
    margin-left: auto;
    margin-right: auto;
}

.toast {
    background-color: #343a40;
}



</style>
