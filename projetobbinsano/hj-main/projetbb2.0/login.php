<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<header>
            <div class="container1">
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

<body>
	<div id="container">
		
		<form id="login_form" action="validacao.php" method="POST">
    <h2>Tela de Login</h2>
			<div id="inputs">
				<div class="input-box">
					<label for="email">E-mail:</label>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" placeholder="fulano@mail.com" required="required" name="email">
					</div>
				</div>
				<div class="input-box">
					<label for="senha">Senha:</label>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="***********" required="required" name="senha">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button id="login_button" type="submit">Entrar</button>
			</div>
		</form>
	</div>

	<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

  <style>
    body {
    font-family: Arial, sans-serif;
    background: #ffffff;
    margin: 0;
    padding: 0;

  }
  
  #header {
    background: #0f012b;
    color: #ffffff;
    padding: 30px;
    text-align: center;
    margin: 5px;
    margin-right: -23px;
    margin-left: -23px;
    margin-top: -10px;
}


  #search-form {
    text-align: center; /* Alinha o conteúdo à direita */
    margin: 5px;
    
  }

  #search-form input[type="submit" ] {
    padding: 6px 7px;
    font-size: 8x;
    background:  #0f012b;
    color: #ffffff;
    border: 1px solid #ffffff;
    cursor: pointer;
    float: right; /* Flutua o botão de envio para a direita */
    margin-top: -29px; /* Adiciona uma margem superior negativa */
    margin-right: 7px;
  }
  
  #search-form input[type="text"] {
    width: 300px;
    height: 30px;
    padding: 4px;
    font-size: 16px;
    float: right; /* Flutua o campo de texto para a direita */
    margin-top: -29px; /* Adiciona uma margem à direita */
    margin-right: 10px;
  }
  
  

  
  #results {
    margin: 20px auto;
    color: #ffffff;
    width: 800px;
    border: 1px solid #ffffff;
  }
  
  .hotel {
    background: #0f012b;
    border: 1px solid #ffffff;
    padding: 10px;
    margin-bottom: 10px;
  }
  img {
    max-width: 100%; /* Garante que a imagem não exceda a largura do contêiner */
    height: auto; /* Mantém a proporção da imagem */
  }
  
  
  </style>

</body>
</html>