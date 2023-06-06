<?php
	include("conexao.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['password'];
	$hash = hash('sha256', $senha);

	// Verificar se o email já está em uso
	$sqlVerificar = "SELECT * FROM usuario WHERE email = '$email'";
	$resultado = mysqli_query($mysqli, $sqlVerificar);
	if (mysqli_num_rows($resultado) > 0) {
		echo "<script>alert('O email já está em uso.');</script>";
		// echo '<script>window.location.href = "pagina_de_erro.php";</script>';
		exit();
	}

	// Inserindo dados no Banco de Dados
	$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$hash')";
	if (mysqli_query($mysqli, $sql)) {
		echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
		echo '<script>window.location.href = "login.php";</script>';
	} else {
		echo "Erro: " . mysqli_error($mysqli);
	}

	mysqli_close($mysqli);
?>
