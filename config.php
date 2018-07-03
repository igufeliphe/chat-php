<?php

date_default_timezone_set('America/Sao_Paulo');


$host = "localhost:3307";
$usuario = "root";
$senha = "usbw";
$banco = "chat";

if(@!mysql_connect($host, $usuario, $senha)){
die("erro nao pode se conectar");
}
if(@!mysql_select_db($banco)){
die("erro base de dados");
}


error_reporting(0);


//class
//tempo 
$Tempo = 5;
$Refresh = $Tempo * 1000;


class Config {
function __construct(){}


	function BoasVindas(){
	echo "Olá <b>$_COOKIE[usuario]</b> Seu ultimo acesso foi em: $_COOKIE[dt_ult_acesso]</b>";
	}





}



?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>