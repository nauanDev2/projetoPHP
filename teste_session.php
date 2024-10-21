<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	
	session_start();

	$_SESSION['nome'] = "Administrador";

	//elimina todas as variaveis de sessão mas, mantém a sessão
	//session_unset();

	//elimina toda a sessão
	//session_destroy();

 	?>

 	<h3>Sessão de Usuário</h3>

 	Bem vindo, Sr. <?php echo $_SESSION['nome']; ?> </br>

 	SID desta sessão é: <?php echo session_id(); ?>


</body>
</html>
