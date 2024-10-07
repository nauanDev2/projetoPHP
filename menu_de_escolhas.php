<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar Usuário</title>
</head>
<body>

	<h1>HortiFruti do NauanDev</h1>
	<p> 1 - banana </p>
	<p> 2 - maçã </p>
	<p> 3 - morango </p>
	<p> 4 - abacaxi </p>
	<p> 5 - lichia </p>



	<form action="recebe_escolha.php" method="post">

		<label for="escolha">Sua resposta:</label>
		<input type="number" name="escolha" id="escolha" required maxlength="100" autofocus>
		
		<input type="submit" name="enviar" value="Enviar">
		
		<input type="reset" name="limpar" value="Limpar">

			
	</form>	

</body>
</html>