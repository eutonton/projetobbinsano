<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="cadastro.css">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>CADASTRO</title>
</head>

<body>
    <main id="container">
        <form action="insert.php" method="POST" id="login_form">
            <div id="form_header">
                <h1>Cadastro</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <div id="social_media">
                <a href="#">
                    <img src="assets/imgs/google.png" alt="Google logo">
                </a>
            </div>

            <div id="inputs">
                <div class="input-box">
                    <label for="nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="name" name="nome">
                        </div>
                    </label>
                </div>
                
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <div class="input-box">
                    <label for="senha">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="password">
                        </div>
                    </label>
                </div>
            </div>
            <button type="submit" id="login_button">Cadastrar</button>

            <div id="login_redirect">
            <button type="button" onclick="redirecionar()">Já possui uma conta? Faça login!</button>
        </div>
            </form>

            <!-- <button type="submit" id="login_button">Cadastrar</button> -->

            <!-- <div id="login_redirect">
            <button onclick="redirecionar()">Já possui uma conta? Faça login!</button>
        </div> -->
    </main>

    <script>
        function redirecionar() {
            // Redireciona para a outra página
            window.location.href = 'login.php';
        }
    </script>
</body>
</html>
