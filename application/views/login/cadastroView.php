
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login lap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
				<a href="index"><img id="inicio" src="https://cdn-icons-png.flaticon.com/512/25/25694.png" width="35px" height="35px"></a>
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="https://www.freeiconspng.com/uploads/user-login-icon-14.png">
                </div>

                <form method="POST" action="" class="login100-form validate-form">
                    <span class="login100-form-title">
						Cadastrar novo colaborador
						<p style="color:red">*Fornecedores são cadastrados dentro do sistema</p>
					</span>
					

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input required class="input100" type="text" name="nome" placeholder="*Nome">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input required class="input100" type="email" name="user" placeholder="*Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input required class="input100" type="password" name="pass" placeholder="*Senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" >
                        <input class="input100" type="date" name="data" placeholder="data do cadastro">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="cidade" placeholder="cidade">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="estado" placeholder="estado">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="cep" placeholder="cep">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="rua" placeholder="rua">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div><br>

					<div >
						<label for="permissao">Nível de permissão</label>
						<select name="level" id="permissao">
						<option value="1">Acesso total</option>
						<option value="2">Acesso Limitado</option>
						</select>
						<p style="color:red">*Com nível limitado o menu de colaboradores é oculto</p>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
							Cadastrar
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$user['nome_colaborador']   = addslashes($_POST['nome']);
	$user['user'] 		        = addslashes($_POST['user']);
	$user['pass']               = base64_encode(addslashes($_POST['pass']));
	$user['data_cadastro']      = addslashes($_POST['data']);
	$user['cidade']             = addslashes($_POST['cidade']);
	$user['estado']             = addslashes($_POST['estado']);
	$user['cep']                = addslashes($_POST['cep']);
	$user['rua']                = addslashes($_POST['rua']);
	$user['level_acess']        = addslashes($_POST['level']);
	$user['usuario_fornecedor'] = 'usuario';
		
	$this->LoginCadastroModel->insert_user($user);
		
	return $user;	
}
?>

<style type="text/css">

/*//////////////////////////////////////////////////////////////////
[ FONT ]*/
#inicio{
	padding: 0 auto;
	margin: 0 auto;
}
@font-face {
    font-family: Poppins-Regular;
    src: url('../fonts/poppins/Poppins-Regular.ttf');
}

@font-face {
    font-family: Poppins-Bold;
    src: url('../fonts/poppins/Poppins-Bold.ttf');
}

@font-face {
    font-family: Poppins-Medium;
    src: url('../fonts/poppins/Poppins-Medium.ttf');
}

@font-face {
    font-family: Montserrat-Bold;
    src: url('../fonts/montserrat/Montserrat-Bold.ttf');
}


/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body,
html {
    height: 100%;
    font-family: Poppins-Regular, sans-serif;
}


/*---------------------------------------------*/

a {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
}

a:focus {
    outline: none !important;
}

a:hover {
    text-decoration: none;
    color: #57b846;
}


/*---------------------------------------------*/

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0px;
}

p {
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
}

ul,
li {
    margin: 0px;
    list-style-type: none;
}


/*---------------------------------------------*/

input {
    outline: none;
    border: none;
}

textarea {
    outline: none;
    border: none;
}



/*---------------------------------------------*/

button {
    outline: none !important;
    border: none;
    background: transparent;
}

button:hover {
    cursor: pointer;
}

iframe {
    border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/

.txt1 {
    font-family: Poppins-Regular;
    font-size: 13px;
    line-height: 1.5;
    color: #999999;
}

.txt2 {
    font-family: Poppins-Regular;
    font-size: 13px;
    line-height: 1.5;
    color: #666666;
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
    width: 100%;
    margin: 0 auto;
}

.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 5px;
    background: #9053c7;
    background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
    background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
    background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
    background: linear-gradient(-135deg, #c850c0, #4158d0);
}

.wrap-login100 {
    width: 960px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 100px 130px 33px 95px;
}


/*------------------------------------------------------------------
[  ]*/

.login100-pic {
    width: 316px;
}

.login100-pic img {
    max-width: 100%;
}


/*------------------------------------------------------------------
[  ]*/

.login100-form {
    width: 290px;
}

.login100-form-title {
    font-family: Poppins-Bold;
    font-size: 24px;
    color: #333333;
    line-height: 1.2;
    text-align: center;
    width: 100%;
    display: block;
    padding-bottom: 54px;
}


/*---------------------------------------------*/

.wrap-input100 {
    position: relative;
    width: 100%;
    z-index: 1;
    margin-bottom: 10px;
}

.input100 {
    font-family: Poppins-Medium;
    font-size: 15px;
    line-height: 1.5;
    color: #666666;
    display: block;
    width: 100%;
    background: #e6e6e6;
    height: 50px;
    border-radius: 25px;
    padding: 0 30px 0 68px;
}


/*------------------------------------------------------------------
[ Focus ]*/

.focus-input100 {
    display: block;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    box-shadow: 0px 0px 0px 0px;
    color: rgba(87, 184, 70, 0.8);
}

.input100:focus+.focus-input100 {
    -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
    animation: anim-shadow 0.5s ease-in-out forwards;
}

@-webkit-keyframes anim-shadow {
    to {
        box-shadow: 0px 0px 70px 25px;
        opacity: 0;
    }
}

@keyframes anim-shadow {
    to {
        box-shadow: 0px 0px 70px 25px;
        opacity: 0;
    }
}

.symbol-input100 {
    font-size: 15px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding-left: 35px;
    pointer-events: none;
    color: #666666;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.input100:focus+.focus-input100+.symbol-input100 {
    color: #57b846;
    padding-left: 28px;
}


/*------------------------------------------------------------------
[ Button ]*/

.container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}

.login100-form-btn {
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #fff;
    text-transform: uppercase;
    width: 100%;
    height: 50px;
    border-radius: 25px;
    background: #57b846;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.login100-form-btn:hover {
    background: #333333;
}


/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 992px) {
    .wrap-login100 {
        padding: 177px 90px 33px 85px;
    }
    .login100-pic {
        width: 35%;
    }
    .login100-form {
        width: 50%;
    }
}

@media (max-width: 768px) {
    .wrap-login100 {
        padding: 100px 80px 33px 80px;
    }
    .login100-pic {
        display: none;
    }
    .login100-form {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .wrap-login100 {
        padding: 100px 15px 33px 15px;
    }
}

</style>
