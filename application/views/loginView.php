<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/m.png" type="image/x-icon" />
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo/login.css">
</head>
<body>



	<?php 

session_start();


	if(isset($_POST['email']) && empty($_POST['email']) == false) //verifica se o e-mail está vazio
{
	$email = addslashes($_POST['email']); //recebe o email 
 	$senha = base64_encode(addslashes($_POST['senha']));  //recebe a senha digitada ( addslashes impede que o usuario manipule o banco)


 	// $dsn = "mysql:dbname=sonho;host=localhost"; //declara a variavel de conexão
	// $dbuser = "root"; //declara a variavel de usuario
	// $dbpass = ""; // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)


	// try {
	// 	$db = new	PDO($dsn, $dbuser, $dbpass);

	// 	$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

	// 	if($sql->rowCount() > 0) {
			
	// 		$dado = $sql->fetch();

	// 		$_SESSION['id'] = $dado['id'];

	// 		header("Location:index.php");
	// 	}else{echo "<script>alert('Desculpe. Usuario não cadastrado')</script>";}


	// } catch(PDOException $e){
 	// 	echo "Falhou: ".$e->getMessage();  //echo "E-Mail: ".$email. " SEMHA: " .$senha; //imprime a senha e o e-mail
 	// }
 
}

 

 ?>




 <form method="POST">
 	<h1 id="bem-vindo">Seja Bem-Vindo Visitante</h1>
 	
 	<br><br><input id="email" class="input" placeholder="Digite seu E-Mail" type="tex" name="email" required><br><br>

 	<input placeholder="Digite sua Senha" type="password" id="senha" class="input" name="senha" required><br><br><br>
 	<button id="entrar">ENTRAR</button><br><br><br><br>
	<button id="cadastrar"><a href="cadastro">Cadastrar</a></button>

	<?php
	if(isset($email)){
		// echo "$email";
		// echo "$senha";
		foreach ($LoginModel as $p) { // trazendo infos do banco 
		// echo "$p->user";
			$user = $p->user;
		}

		if($email == $user){  // verificação de login
			echo "Logado";
		}elseif($email !== $user){
			echo "<b style='color:red'>Login incorreto, verifique e tente novamente</b>"; // aviso de login incorreto
		}
	}	
	?>
 	
 </form>




</body>
</html>

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
