<?php
    session_start();

    if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login_cadastro.php');

    }
    $permissao = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ÁREA DE ESTILIZAÇÃO -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/7dcf609fba.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <title>Endorfina</title>
    <link rel="shortcut icon" href="./img/randomrest.png">
</head>
<body>
    <div class="Endorfina">
    <style>
            .Endorfina{
                opacity:0.9;
            }
        </style>
       <div class="header"> 
        <nav id="navbar-header">
            <a href="testehome.php" class="logo"><i class="fa-solid fa-hashtag"></i>
            <span>RandomRest</span></a>

            <ul class="navbar">
                <li><a href="testeEndorfina.php">Endorfina</a></li>
                <li><a href="testeSerotonina.php">Serotonina</a></li>
                <li><a href="testeOcitocina.php">Ocitocina</a></li>
                <li><a href="meudiario.php">(DV) Registro</a></li>
            </ul>
    
            <div class="main">
                <a href="logout.php" class="user"><i class="ri-user-fill"></i>Logout</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </nav>
    </div>
    </div>
        <div class="endofirna">
        <style>
            .endofirna
            {
                opacity:0.9;
                }
        </style>
            <div class="coluna-centro">
                <div class="card">
                    <h1>Endorfina</h1>
                    <h5>Segundo texto do blog RandomRest, Dec 12, 2022.</h5>
                    <img src="./img/1.jpg" alt="imagemEsquilo"/>
                    <p>Se você chegou aqui, provavelmente, deve estar se sentindo meio pra baixo.</p>
                    <p>Com aquele famoso "borocoxó" dentro do peito, e essa fotinha aí de cima
                        vem com o intuito de mudar pelo menos um pouquinho desse sentimento em 
                         você.
                    </p>
                </div>
                
            </div>

            <div class="coluna-direita">
                    <div class="card1">
                        <h3>Parando para analisar o seu redor</h3> 
                        <h5>Cantinho do pensamento, Dec 12, 2022</h5>
                        <div class="textoLateral1">   
                            <p>
                                Quantas vezes nos esquecemos de perceber a nossa vida, né?
                            </p>
                            <p>
                                Mas vamos exercitar isso agora juntos. Feche os olhos e 
                                 tente trazer a memória aquilo que remete o seu presente.
                            </p>
                        </div>    
                    </div>

                    <div class="card">
                        <h2>REFLEXÃO</h2>
                        <h5>Cantinho do pensamento, Dec 12, 2022</h5>
                        <img src="./img/17.jpg" alt="imagemReflexão"/>
                        <p>Antes de tudo, acesse a playlist abaixo.</p>
                        <p>Vai te ajudar a desligar um pouco os pensamentos e te prometo
                            que não é daquelas com músicas que mais parecem de velório
                             ou coisa assim, kkk. Pode confiar.
                        </p>
                    </div>

                </div>
            </div>
    <footer>
        <ul>
                   
        </ul>
            <p> ©Copyright RandomRest 2022.</p>
    </footer>
</body>
</html>