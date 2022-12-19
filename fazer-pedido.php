<?php
	@$realizarPedido = $_POST['realizar-pedido'];

	if($realizarPedido) {
		echo "<script> alert('Pedido realizado com sucesso! Aguarde nosso contato.'); </script>";
	}
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Fazer Pedido - Cesta Dos Sonhos </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="_css/master.css">
		<link rel="stylesheet" href="_css/fazer-pedido.css">
	</head>

	<body>
<?php
		include('componente/cabecalho.html');
?>
		<main class="py-5 bg-light">
			<section class="my-5">
				<div class="container">
					<h1 class="mb-5 my-md-5 text-center display-4 text-secondary"> Fazer Pedido </h1>

					<form class="quicksand" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST"  oninput="calc_total();">
						<fieldset id="contato">
							<legend> Informações de Contato </legend>

							<label>
								Nome Completo:
								<input type="text" name="nome" size="20" maxlength="30" placeholder="Nome Completo" required/>
							</label>
							
							<label>
								Email:
								<input type="email" name="email" size="20" maxlength="40" placeholder="E-mail" required/>
							</label>

							<label>
								Telefone:
								<input type="text" name="tel" maxlength="13" onkeypress="formatar('## #####-####', this)" placeholder="Número de telefone celular com DDD" required/>
							</label>
						</fieldset>

						<fieldset id="reserva">
							<legend> Reserva de Cesta </legend>

							<label>
								Número de Cestas:
								<select name="qtdpessoa" required>
									<option selected> 1 unidade </option>
									<option> 2 unidades </option>
									<option> 3 unidades </option>
									<option> 4 unidades </option>
									<option> 5 unidades </option>
									<option> 6 unidades </option>
									<option> 7 unidades </option>
									<option> 8 unidades </option>
									<option> 9 unidades </option>
									<option> 10 unidades </option>
								</select>
							</label>

							<label>
								Data:
								<select name="data" required>
									<option selected> Segunda </option>
									<option> Terça </option>
									<option> Quarta </option>
									<option> Quinta </option>
									<option> Sexta </option>
									<option> Sábado </option>
									<option> Domingo </option>
								</select>
							</label>

							<label>
								Hora:
								<input type="time" name="hora" required/>
							</label>

							<label>
								Comentários: <br/>
								<textarea name="descricao" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea>
							</label>
						</fieldset>

						<fieldset id="pedido">
							<legend> Pedido </legend>

							<label>
								Cesta: <br/>
								<select name="prato" id="cprato" required>
									<option selected disabled> Selecione Seu Presente </option>
									<option value="chocolate"> Cesta De chocolate </option>
									<option value="casal"> Cesta Casal </option>
									<option value="papai"> Cesta Papai </option>
									<option value="mamãe"> Cesta Mamãe </option>
									<option value="aniversario"> Cesta Aniversário </option>
									<option value="namorados"> Cesta Namorados </option>
								</select>
							</label>

							<label>
								Quantidade: <br/>
								<input type="number" name="qtd" id="cqtd" min="1" max="10" value="1" required/>
							</label>

							<label>
								Preço Total: R$ <br/>
								<input type="text" name="tTot" id="ctot" placeholder="Total a pagar" readonly/>
							</label>
						</fieldset>

						<fieldset id="fpagamento">
							<legend> Forma de pagamento </legend>

							<label>
								<input type="radio" name="pagamento" checked/>
								Dinheiro
							</label>

							<label>
								<input type="radio" name="pagamento"/>
								Cartões (crédito/débito)
							</label>
						</fieldset>

						<input name="realizar-pedido" class="btn btn-outline-success" type="submit" value="Realizar Pedido">
					</form>
				</div>
			</section>
		</main>


<?php
require './Conexao/conexao.php';

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$descricao = $_POST['descricao'];

		//$sql = "select * from teste where nome = '$nome'";
		
		//$resultado = mysqli_query($mysqli_connection, $sql);
		//verifica campo vazio
if ($nome == null || $email == null || $descricao == null) {
	echo "nome, email ou comentario vazio!";
  } else {
  //----------------//
		
		$sql = "INSERT INTO pedidos VALUES ('', '$nome', '$email', '$descricao')";		
		if (mysqli_query($mysqli_connection, $sql)) {
			echo "enviado com sucesso!";
		} else {
		  echo "Error: " . mysqli_error($mysqli_connection);
		}
		mysqli_close($mysqli_connection);
	}
?>
	</body>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="_js/master.js"></script>
	<script src="_js/fazer-pedido.js"></script>
</html>