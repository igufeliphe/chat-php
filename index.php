<?php
ob_start();
include_once("config.php");
$Config = new Config();

if(!isset($_COOKIE['usuario'])){
echo "<script>location.href='logar.php'; </script>";
}


include("Class.chat.php");
include("Class.emoticon.php");

if(isset($_POST['enviar'])){
$chat = new Conversas;
$destino = $_POST['destino'];
$chat->Adicionar($_POST['chatear'], $destino);
}




?>


<html>

<head>
<title>Em construçao.. </title>
<script type="text/javascript" src="ajax.js"></script>
</head>
<body onLoad="document.formulario.chatear.focus();">


<div align='right' > <?php $Config->BoasVindas(); ?> <a href='index.php'>Atualizar</a> - <a href='meus_dados.php'>Meus Dados</a> - <a href='logar.php?sair=0'>Sair [x]</a></div><br>
	<table align='center'>
		<tr>
			<td>
			<iframe  name="iframe" id="iframe" width='950px' height='400px' src='iframe.php' height='100%'></iframe>
			</td>
			</tr>
			<tr>
			<td>
			</br>
			
			<div id='emoticon' align='center'>
				<?php $img = new Emoticon; $img->Gerar(); ?>	
			</div>

			<form action='index.php' name='formulario' method='post' ><hr>
			<b>Digite aqui sua Mensagem: </b>

			<div class="row">
			  <div class="col-xs-12 col-md-8">
					<input type='text' id='chatear' name='chatear' size='40' class="form-control" />
			  </div>

			  <div class="col-xs-6 col-md-4">
			  	<input id='enviar' name='enviar' value='Enviar Chat' class="btn btn-default" type='submit' size='10px' />			
			  </div>

			</div><br>
					<select id='destino' name='destino' >
						<option selected='selected' value='Todos'>Todos</option>
						<?php $users = new Conversas; $users->ListaOnline(); ?>
					</select>	
			</form>
			</td>
		</tr>
	


</body>
</html>