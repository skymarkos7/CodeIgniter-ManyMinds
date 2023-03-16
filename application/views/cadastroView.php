<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/m.png" type="image/x-icon" />
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo/cadastro.css">
	<script src="js/validar.js" type="text/javascript"></script>
</head>
<body>

	<form method="POST" name="dados" onSubmit="return validacao()";>
		<a href="index"><img id="inicio" src="https://cdn-icons-png.flaticon.com/512/25/25694.png" width="35px" height="35px"></a>
		<br><h2>Crie seu cadastro, rápido e fácil</h2><br>
		<input  type="text" id="nome" class="input" placeholder="Nome Completo" name="nome"><br><br>
		<input type="text" id="email" class="input"  placeholder="E-mail" name="email"><br><br>
	</fieldset>
	<input type="password" id="senha" class="input" onkeyup="seguranca(this)"  placeholder="Crie sua Senha" name="senha"><br><br>
	<input type="checkbox" name="termos" required> Aceito os termos da pagina <br><br><br><br><br><br><br><br>
	<input type="submit" id="enviar" value="Enviar">
	<progress value="" id="nivel" max="100">	
</form>



<?php 

//------------------  conexão com o banco ----------------------

	$dsn = "mysql:dbname=sonho;host=localhost";//declara a variavel de conexão
	$dbuser = "root";  //declara a variavel de usuario
	$dbpass = "";  // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)


//------------------ fim da conexão com o banco ----------------








if(isset($_POST['email']) && ($_POST['email'] != "")) //verifica se o e-mail está vazio
{
	if(isset($_POST['senha']) && ($_POST['senha'] != "")) //verifica se a senha está vazia
	{
 	if(isset($_POST['nome']) && ($_POST['nome'] != "")) //verifica se o nome está vazio
 	{

 		$email = addslashes($_POST['email']);  //recebe o email digitado
 		$senha = base64_encode(addslashes($_POST['senha']));  //recebe a senha digitada
 		$nome = $_POST['nome'];  //recebe o nome digitado


//------------------ comandos no banco ----------------------------------------


 		try {
 			$pdo = new PDO($dsn, $dbuser, $dbpass);



 			$sql = "INSERT INTO usuarios SET nome = '$nome', email ='$email', senha = '$senha'";
 			$sql = $pdo->query($sql);

 			echo "<script>alert('Obrigado ".$nome." , Cadastro realizado com Sucesso!')</script>";

 			echo "<script type=\"text/javascript\">
 			window.setTimeout(\"location.href='login.php';\", 1000);
 		</script>";


// trata a exeção, caso não consiga conectar.... (TRY faz parte do CATCH)	
 	} catch (Exception $e) {
 		echo "falhou".$e->getMessage();
 	}


//--------------------- fim comandos no banco --------------------------------


 }
}
}//else{ echo "<script>alert('Preemcha todos os campos');</script>";}

?>




</body>
</html>


<style>
	*{
	margin:0 auto;
	text-align: center;
}
body{
	background-color: #2a3964;
}
form{
	margin-top: 30px;
	border: 2px grey solid;
	border-radius: 25px;
	height: 500px;
	width: 500px;
	background-color: #222E50;
}
.input{
	height: 30px;
	width: 350px;
	border-radius: 7px;
}
h2{
	color:#fff;
}
#enviar{
	height: 50px;
	width: 100px;
	margin-left: 350px;
	margin-top: -65px;
	border-radius: 55px;
}
#inicio{
	position: absolute;
	margin-left: -210px;
	margin-top: 45px;
}
</style>
