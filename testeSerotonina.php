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

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/7dcf609fba.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <title>Serotonina</title>
    <link rel="shortcut icon" href="./img/randomrest.png">
</head>
<body>
    <div class="Serotonina">
        <style>
            .Serotonina{
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
        <div class="serotonina">
            <style>
                .serotonina{
                    opacity:0.9;
                }
            </style>
            <div class="coluna-centro">
                <div class="card">
                    <h1>Serotonina</h1>
                    <h5>Quarto texto do blog RandomRest, Dec 12, 2022.</h5>
                    <img src="./img/13.jpg" alt="imagemFlorzinhas"/>
                        <p>As florzinhas da foto podem te lembrar algo peculiar.</p>
                        <p>
                            Don't like to talk, I just lay in my bed, don't even try to go out 
                            with my friends. Lied to my doctor, she knew I was fakin', gave me 
                            some pills, but I'm too scared to take 'em. I try and I try, but I'm 
                            too sad to cry.
                        </p>
                        <p>
                            Can't tell my Mamma, it makes her worry. I'm not suicidal, sometimes, 
                            the lines get all blurry...
                        </p>
                </div>   
            </div>

            <div class="coluna-direita">
                    <div class="card1">
                        <h3>Parando para analisar o seu redor</h3> 
                        <h5>Cantinho do pensamento, Dec 12, 2022</h5>
                        <!--<img src="./img/.jpg" alt="blog "/>-->
                        <div class="textoLateral1">   
                            <p>
                                Encarar o teto como se tudo aquilo que buscamos fosse cair
                                 dele é mais comum do que a gente imagina.
                            </p>
                            <p id="ultimoParag">
                                Muitas vezes, isso acontece por estarmos cansados ou simplesmente
                                 não estarmos muito a fim de fazer dar certo naquele momento.
                            </p>
                        </div>    
                    </div>

                    <div class="card">
                        <h2>REFLEXÃO</h2>
                        <h5>Cantinho do pensamento, Dec 12, 2022</h5>
                        <img src="./img/14.jpg" alt="imagemReflexão"/>
                        <p>Você deve estar se perguntando o porquê de tantas imagens nesse site.</p>
                        <p>
                            Como essa aqui, por exemplo. Qual será o intuito da foto de uma imagem
                             de uma lavanda sozinha numa jarra?
                        </p>
                    </div>
                </div>
            </div>
    <footer>
       <h4 style="color: #29292b;">CENTRAL DE AJUDA</h4>
        <ul>
            <li>
                <p>
                    CVV (Centro de Valorização da Vida)
                    <br>Ligue 188.</p>
            </li>      
            <li>
                <p>
                    <span>U-Report</span>
                    <br> <a href="https://www.ureportbrasil.org.br/join/">
                        <i class="fa-solid fa-arrow-right"></i> 
                        Atendimento psicológico online.</a>
                    </p>
            </li> 
        </ul>
                <p> ©Copyright RandomRest 2022.</p>
    </footer>
</body>
</html>