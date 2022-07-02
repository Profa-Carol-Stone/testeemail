<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Contato</title>
</head>
<body>
	<form action="envia.php" method="post">
		<label>Nome:
			<input type="text" name="nome"><br>
		</label>
		<label>E-mail:
			<input type="text" name="email"><br>
		</label>
		<label>Mensagem:
			<textarea name="mensagem"></textarea><br>
		</label>
		<input type="submit">
	</form>
</body>
</html>