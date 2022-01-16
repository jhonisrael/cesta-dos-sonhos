<?php
	@$enviarMensagem = $_POST['enviar-mensagem'];

	if($enviarMensagem) {
		echo "<script> alert('Mensagem enviada com sucesso! Aguarde nosso contato.'); </script>";
	}
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Cesta Dos Sonhos </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="_css/master.css"> 
		<link rel="stylesheet" href="_css/contato.css"> 
	</head>

	<body>
<?php
		include('componente/cabecalho.html');
?>
		<main class="py-5 bg-light">
			<section class="my-5">
				<div class="container">
					<p class="quicksand text-center"> Gostou do site? Entre em contato com nossa equipe. </p>

					<h1 class="mb-5 my-md-5 text-center display-4 text-secondary"> Contato </h1>
                   	
					<form class="quicksand" method="POST" action="contato.php">
						<input id="nome" name="nome" type="text" placeholder="Nome Completo" required>
						<input id="telefone" name="telefone" type="text" maxlength="13" onkeypress="formatar('## #####-####', this)" placeholder="Telefone" required>
                    	<input id="email" name="email" type="email" placeholder="E-mail" required>
                    	<input id="assunto" name="assunto" type="text" placeholder="Assunto" required>
						<textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui" required></textarea> 
                    	<input name="enviar-mensagem" class="btn btn-outline-success" type="submit" value="Enviar">              	
                	</form>
				</div>
			</section>
		</main>
<?php
		include('componente/rodape.html');
?>
	</body>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="_js/master.js"></script>
</html>