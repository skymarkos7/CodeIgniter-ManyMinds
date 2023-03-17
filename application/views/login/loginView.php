<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/m.png" type="image/x-icon" />
	<title>login</title>
	<meta charset="utf-8">
</head>
<body>


	<?php

    session_start();


	if (isset($_POST['email']) && empty($_POST['email']) == false) { //verifica se o e-mail está vazio
	    $email = addslashes($_POST['email']); //recebe o email
	    $senha = base64_encode(addslashes($_POST['senha']));  //recebe a senha digitada ( addslashes impede que o usuario manipule o banco)
	}



	?>




 <form method="POST">
 	<h1 id="bem-vindo">Seja Bem-Vindo Visitante</h1>
 	
 	<br><br><input id="email" class="input" placeholder="Digite seu E-Mail" type="email" name="email" required><br><br>

 	<input placeholder="Digite sua Senha" type="password" id="senha" class="input" name="senha" required><br><br><br>
 	<button id="entrar">ENTRAR</button><br><br><br><br>
	<button id="cadastrar"><a href="cadastro">Cadastrar</a></button>

	<?php	
		if (isset($email)) {
			foreach ($LoginModel as $p) { // trazendo infos do banco
				// echo "$p->user";
				$user = $p->user;
				//$pass = $p->pass;
			}

			//echo $user;
			if ($email == $user) {  // verificação de login
				header("Location: product");
				die();
			} elseif ($email !== $user) {
				echo "<b style='color:red'>Login incorreto, você tem mais ".$attempt." tentativas</b>"; // aviso de login incorreto
			}
		}
	?>
 	
 </form>




</body>
</html>

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

<style>
	*{
	margin: 0 auto;
	text-align: center;
}

form{
	border-radius: 30px;
	margin-top: 30px;
	height: 500px;
	width: 500px;
	border: 3px grey solid;
	background-color: #222E50;

}
.input{
	margin:10px;
	height: 40px;
	width: 350px;
	border: solid grey 1px;
	border-radius: 35px;
}
body{
	background-color: #2a3964;
}
#entrar{
	height: 40px;
	width: 90px;
	border-radius: 25px;
	background-color: #fff;
}
#cadastrar{
	margin-left: 400px; 
	margin-top: 25px;
	height: 30px;
	width: 90px;
	border-radius: 40px;
	background-color: #222E50;
	
}
#bem-vindo{
	margin-top: 30px;
	color: #fff;
}

footer{
	display: inline-block;
	color: #fff;
}
a{
	text-decoration: none;
	color: #fff;
}

</style>
