<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Cesta Dos Sonhos </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="_css/master.css">
		<link rel="stylesheet" href="_css/index.css">
	</head>

	<body>
<?php
		include('componente/cabecalho.html');
?>
		<main class="py-5 bg-light">
			<section id="catalogo" class="my-5">
				<div class="container">
					<h1 class="mb-5 my-md-5 text-center display-4 text-secondary"> Modelos De Cestas </h1>

					<div class="row text-center quicksand">
						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/img1.jpg" alt="chocolate">	
							<p class="text-secondary mb-0 mt-3"> Cesta de chocolate </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/img2.png" alt="casal">	
							<p class="text-secondary mb-0 mt-3"> Cesta casal</p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/img3.png" alt="papai">	
							<p class="text-secondary mb-0 mt-3"> Cesta Papai </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/img4.png" alt="mamãe">	
							<p class="text-secondary mb-0 mt-3"> Cesta Mamãe </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/img5.png" alt="aniversario">	
							<p class="text-secondary mb-0 mt-3"> Cesta Aniversário </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/index/img6.png" alt="namorados">	
							<p class="text-secondary mb-0 mt-3"> Cesta Namorados </p>
						</div>
					</div>
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