<?php
$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$dbname = "cadastro";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografar a senha fornecida pelo usuário
    $senhaCriptografada = hash('sha256', $senha);

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senhaCriptografada'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<script>alert('Usuário autenticado com sucesso!');</script>";
        echo '<script>window.location.href = "comentario.php"; </script>';

    } else {
        echo "<script>alert('Email ou senha incorreto!');</script>";
        echo '<script>window.location.href = "login.php"; </script>';
    }
}

$conn->close();
?>
