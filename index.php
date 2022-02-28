<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Cidades</title>
</head>
<body>

	<h1>Cadastro de Cidades</h1>

	<form method="POST">

		<label for="cidade">Cidade:</label><br>
		<input type="text" name="cidade" id="cidade"><br><br>
		<label for="uf">UF:</label><br>
		<input type="text" name="uf" id="uf"><br><br>
		<input type="submit" name="acao" id="acao" value="Cadastrar Cidade">

	</form>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>

		$('#acao').click(function() {

			var cidade = $('#cidade').val();
			var uf = $('#uf').val();

			$.ajax({

				type: "POST",
				url: "cadastro.php",
				data: {
					cidade,
					uf
				},
				success: function(data) {
					alert(data);
				},
				error: function(data) {
					alert(data);
				}

			});

			return false;
		});

	</script>

</body>
</html>