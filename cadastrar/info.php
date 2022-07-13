<?php

if ($_POST) {
	$conn = new PDO('mysql:host=localhost;dbname=exemplo', 'root');
	$sql = "insert into clientes values('', '$_POST[usuario]', '$_POST[senha]', '$_POST[email]','$_POST[telefone]', '$_POST[data_nasc]', '$_POST[dica_senha]')";
	var_dump($sql);
	$stmt = $conn->prepare($sql);
	$stmt->execute();




	var_dump($stmt);
};

?>
<link rel="shortcut icon" href="/projeto/icone_Site.ico" type="image/x-icon">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


<body class="bg-gradient-to-r from-green-400 to-blue-500 ...">


	<style>
		body {
			background-color: #99bbff;
		}
	</style>
	<div class="container">
		<div class="row" style="height: 80vh; padding-top:40px;">
			<form method="POST" class="card col-md-5 m-auto mt-auto">
				<center>
					<font size="6">Cadastrar Usuário</font>
				</center>
				<hr class="my-3">
				<label for="usuario">Usuário</label>
				<input id="usuario" type="text" name="usuario" class="form-control" required>
				<label for="senha">Senha</label>
				<input id="senha" type="password" name="senha" class="form-control" required>
				<label for="email">E-mail</label>
				<input id="email" type="email" name="email" class="form-control" required>
				<label for="telefone">Telefone</label>
				<input id="telefone" type="text" name="telefone" class="form-control" required>
				<label for="data_nasc">Data de Nascimento</label>
				<input id="data_nasc" type="date" name="data_nasc" class="form-control" required>
				<label for="dica_senha">Dica da Senha</label>
				<input id="dica_senha" type="text" name="dica_senha" class="form-control" required>
				<div class="row">
					<div class="col-6">
						<button type="submit" class="btn btn-dark my-1 btn-block">Cadastrar</button>
					</div>
					<div class="col-6">
						<a href="../" class="btn btn-dark my-1 btn-block">Voltar</a>
					</div>
				</div>

			</form>
		</div>
	</div>

</body>