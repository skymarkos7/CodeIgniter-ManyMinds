

<?php

defined('BASEPATH') or exit('No direct script access allowed');
session_start();  // inicia a sessão


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (isset($_POST['user']) && empty($_POST['user']) == false) {  //verifica se o e-mail está preenchido
    $user = addslashes($_POST['user']);                             //recebe o email ( addslashes impede que o usuario manipule o banco)
    $pass = base64_encode(addslashes($_POST['pass']));              //recebe a senha digitada ( addslashes impede que o usuario manipule o banco)
    $id   = session_id();	                                        //Gera um id para a sessão
	}

	$result = $this->LoginModel->list_user($user);
	//var_dump($result[0]->user);

	if($result[0]->user == $user && $pass == $result[0]->pass){	 //verifica se existe o usuário digitado e se a senha está correta.		  
		$_SESSION['id']   =  $id;
		$_SESSION['user'] =  $user;
		$_SESSION['name'] =  $result[0]->nome_colaborador;
		header("Location: ../dashboard/");
		die;
			
	}else{
		$incorrect = "<b style='color:red'>Login incorreto, você tem {{}} tentativas restantes</b>"; // aviso de login incorreto
	}

}

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>


		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="https://www.freeiconspng.com/uploads/user-login-icon-14.png">
					</div>					

					<form method="post" class="login100-form validate-form">
						<span class="login100-form-title">
							Login do Membro
						</span>

						<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
							<input required class="input100" type="text" name="user" placeholder="Email">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input required class="input100" type="password" name="pass" placeholder="Senha">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
							<button  class="login100-form-btn">
								Login
							</button>
							<?php 
								if(isset($incorrect )){
									echo $incorrect;
								}							
							?>
						</div><br>

						<div class="text-center p-t-136">
							<a href="cadastro" class="txt2" href="#">
								Cadastrar uma conta
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>

	</body>

</html>

<?php 
session_destroy(); 
?>

<script>
	
	async function getLocale() {   
		/***********************
		* pegar SO do usuário 
		**********************/
        
		var el_down = document.getElementById("GFG_DOWN");
		var Name    = "Sistema desconhecido";
		var locale;

		if (navigator.userAgent.indexOf("Win")      != -1) Name = "Computador Windows";
		if (navigator.userAgent.indexOf("Mac")      != -1) Name = "Computador Apple";
		if (navigator.userAgent.indexOf("Linux")    != -1) Name = "Computador Linux";
		if (navigator.userAgent.indexOf("Android")  != -1) Name = "Celular Android";
		if (navigator.userAgent.indexOf("like Mac") != -1) Name = "Celular iOS";  
		let so = Name;  

		          
			/***********************
		    * pegar IP
			* e dados de localização do usuário  
		    **********************/

		fetch('http://ip-api.com/json/')
		.then(response => response.json())
		.then(data => console.log(data))
		
		.catch(error => console.error(error))	

		// const response_locale = fetch("http://ip-api.com/json/");
		// let country    = data.country;
		// let regionName = data.regionName;
		// let city       = data.city;
		// let zip        = data.zip;
		// let isp        = data.isp;
		// let ip         = data.query;
		// let text       = "<b>Você recebeu uma nova visita:</b> %0A %0A" + "<b>PAÍS:</b> " +  country +  "%0A" +  "<b>ESTADO:</b> " +  regionName +   "%0A" + "<b>CIDADE:</b> " +  city +   "%0A" +   "<b>PROVEDOR:</b> " +  isp+ "%0A"+ "<b>CEP:</b> " +  zip +"%0A"+ "<b>Dispositivo:</b> " +  so +  "%0A"  +"<b>IP:</b> " +  ip;
		// let text2      = data;

			
    }
	getLocale();
</script>


<style type="text/css">

/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

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
    padding: 15px;
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
    padding: 177px 130px 33px 95px;
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
	color: #fff;
}
a{
	text-decoration: none;
	color: #fff;
}

</style>
