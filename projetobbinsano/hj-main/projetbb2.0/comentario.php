<?php
session_start(); // Inicia a sessão

// Definição das variáveis de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$dbname = "cadastro";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $nome_academia = $_POST["nome_academia"];
    $comentario = $_POST["comentario"];

    // Conecta ao banco de dados
    $conn = new mysqli($servidor, $usuario, $senha, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara a consulta de inserção
    $stmt = $conn->prepare("INSERT INTO comentario (nome, nome_academia, comentario) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $nome_academia, $comentario);

    // Executa a consulta de inserção
    if ($stmt->execute()) {
        echo "<script>alert(Dados salvos com sucesso!)</script>";
    } else {
        echo "Erro ao salvar os dados: " . $stmt->error;
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="coment.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    
</head>
<body>

    <header>
            <div class="container">
                <div class="logo"><img src="./logo.jpg"></div>
                <div class="menu">
                    <nav>
                        <a href="index.html">Home</a>
                        <a href="#equipe">Nossa equipe</a>
                        <a href="login.php">Login</a>
                        <a href="cadastro.php">Cadastro</a>
                        <a href="https://mail.google.com">encontreacademias@gmail.com</a>
                    </nav>
            </div>
    </header>

    <div class="content">
    <div id="form-container">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome" class="center1">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="nome_academia">Nome da Academia:</label><br>
        <input type="text" name="nome_academia" id="nome_academia"><br>
        <label for="comentario">Comentário:</label><br>
        <textarea name="comentario" id="comentario"></textarea><br>
        <!-- <div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

        <link rel="stylesheet" href="estilo.css">
</div> -->

        <input type="submit" value="Salvar">
    </form>
</div>

<div id="saved-data" class="comentarios">
            <h2>Comentários:</h2>
  
    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?> 
		
			


<div class="left-align">
    

    <?php
    // Conecta novamente ao banco de dados
    $conn = new mysqli($servidor, $usuario, $senha, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta os dados salvos
    $sql = "SELECT nome, nome_academia, comentario FROM comentario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Nome: " . $row["nome"] . "<br>";
            echo "Nome da Academia: " . $row["nome_academia"] . "<br>";
            echo "Comentário: " . $row["comentario"] . "<br><br>";
        }
    } else {
        echo "Nenhum comentário encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>
    </div>
</body>
</html>


<!-- <style>
    /* Estilo geral */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 20px;
    }

    h1 {
        color: #000;
        margin-bottom: 20px;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #000;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #FFD700;
        color: #000;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #FFC800;
    }

    h2 {
        color: #000;
        margin-bottom: 10px;
    }

    .comment {
        background-color: #FFF;
        border: 1px solid #000;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .comment p {
        margin-bottom: 5px;
    }
</style> -->

</body>
</html>
