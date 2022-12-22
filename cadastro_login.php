<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ÁREA DE ESTILIZAÇÃO -->
    <link href="./css/styleLoginCad.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7dcf609fba.js" crossorigin="anonymous"></script>

    <title>Cadastro</title>
    <link rel="shortcut icon" href="./img/randomrest.png">
</head>

<body>
    <div id="form_cadastro">
        <form action="cadastro.php" autocomplete="off" class="sign-in-form" method="post">

            <div class="logo">
                <img src="./img/randomrest.png" alt="randomrest" />
                <h4>RandomRest</h4>
            </div>

            <div class="cadastro">
                <h2 class="title">Cadastro</h2>

                <label>Nome</label>
                <div class="input">
                    <i class="fa-regular fa-user"></i>
                    <input id="nome" name="nome" placeholder="Nome" type="text" 
                    minlength="4" autocomplete="off" required>
                </div>

                <label>E-mail</label>
                <div class="input">
                    <i class="fa-regular fa-envelope"></i>
                    <input id="email" name="email" placeholder="E-mail" type="text" 
                    minlength="4" autocomplete="off" required>
                </div>

                <label for="">Senha</label>
                <div class="input">
                    <i class="fa-solid fa-lock"></i>
                    <input id="senha" name="senha" placeholder="Senha" type="password" 
                    minlength="4" autocomplete="off" required>
                </div>

                <div id="btn">
                    <button type="submit">Cadastrar</button>
                </div>

                <div class="botaoLogin">
                    <h6>Já possui uma conta?
                        <a href="login_cadastro.php" class="toggle">Login</a>
                    </h6>
                </div>
            </div>
        </form>
    </div>
</body>

</html>