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

    <title>Login</title>
    <link rel="shortcut icon" href="./img/randomrest.png">
</head>
<body>
    <div class="container">
        <div id="form_login">
            <form action="login.php" autocomplete="off" class="sign-in-form" method="post">
            
            <div class="logo">
                <img src="./img/randomrest.png" alt="randomrest" />
                <h4>RandomRest</h4>
            </div>
            
            <div class="login">
                <h2 class="title">Login</h2>

                <label for="">E-mail</label>
                <div class="input">
                    <i class="fa-regular fa-envelope"></i>
                    <input id="email" name="email" placeholder="E-mail" type="text" minlength="4" autocomplete="off"
                        required>
                </div>
    
                <label for="">Senha</label>
                <div class="input">
                    <i class="fa-solid fa-lock"></i>
                    <input id="senha" name="senha" placeholder="Senha" type="password" minlength="4" autocomplete="off"
                        required>
                </div>
    
                <div id="btn">
                    <button type="submit" name="btn-submit">Entrar</button>
                </div>
    <br>

        <div class="areaPHP">
            <?php
                if (isset($_SESSION['nao_autenticado'])):
                ?>
                    <span><h5>E-mail ou senha errados (e-mail pode não ter sido cadastrado)!</h5></span>
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
        </div>
                                
        <div>
            <?php
                if (isset($_SESSION['usuario_cadastrado'])):
                ?>
                    <span><h5>Usuário cadastrado com sucesso! Faça o seu Login.</h5></span>
            <?php
                endif;
                unset($_SESSION['usuario_cadastrado']);
                ?>
            <?php
                if (isset($_SESSION['ja_cadastrado'])):
                ?>
                    <span><h5>E-mail já cadastrado. Escolha outro.</h5></span>
            <?php
                endif;
                unset($_SESSION['ja_cadastrado']);
                ?>                    
        </div>
                <div class="botaoCadastro">
                    <h6>Ainda não possui conta? <a href="cadastro_login.php" class="toggle">Cadastre-se</a></h6>
                </div>
            </div>
        </form> 
    </div>
</body>
</html>