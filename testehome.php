<?php
    session_start();

    if (!isset($_SESSION['email'])  and !isset($_SESSION['senha'])) {

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
    <link rel="stylesheet" type="text/javascript" href="./js/app.js">
    <script src="https://kit.fontawesome.com/7dcf609fba.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <title>Home</title>
    <link rel="shortcut icon" href="./img/randomrest.png">

    <style type="text/css">
        body{
            margin: 0;
        }
        .homeImagens{
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url("./img/5.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            animation: bgChange 20s linear infinite;
            opacity: 0.9;
        }
        @keyframes bgChange{
            0%{
                background-image: url("./img/5.jpg");
            }
            20%{
                background-image: url("./img/5.jpg");
            }
            25%{
                background-image: url("./img/6.jpg");
            }
            45%{
                background-image: url("./img/6.jpg");
            }
            50%{
                background-image: url("./img/2.jpg");
            }
            70%{
                background-image: url("./img/2.jpg");
            }
            75%{
                background-image: url("./img/5.jpg");
            }
            95%{
                background-image: url("./img/5.jpg");
            }
        }
        .overLay{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            background-color: #878787;
        }
        .content{
            position: relative;
            width: 100%;
            height:100%;
            color: ivory;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 2;
        }
    </style>
</head>
<body>
    <div class="homeImagens">
       <div class="header"> 
        <nav id="navbar-header">
            <a href="testehome.php" class="logo"><i class="fa-solid fa-hashtag"></i>
            <span>RandomRest</span></a>

            <ul class="navbar">
                <li><a href="testeEndorfina.php">Endorfina</a></li>
                <li><a href="testeSerotonina.php">Serotonina</a></li>
                <li><a href="testeOcitocina.php">Ocitocina</a></li>
                <li><a href="meudiario.php">(DV) Registro </a></li>
            </ul>
    
            <div class="main">
                <a href="logout.php" class="user"><i class="ri-user-fill"></i>Logout</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </nav>
    </div>

        <div class="overlay"></div>
        <div class="content">
            <h1>Um espaço feito <span>pra você.</span></h1>
            <a href="#desenvolvimento-home" class="ctn">
                Venha conhecer mais do RandomRest!</a>    
        </div>
    </div>
        <div class="home" id="desenvolvimento-home">
            <div class="coluna-esquerda">
                <div class="card">
                    <img src="./img/randomrest.png" alt="logoHome"/>
                    <h3>Seção de Boas-Vindas</h3>
                    <p id="primeiroParag">Oi, serzinho(a) do lado daí!</p>
                    <p>Aqui quem fala é a Bia, uma das desenvolvedoras do RandomRest, e 
                        venho através desse pequeno texto te dar as boas-vindas ao nosso
                         site.
                    </p>
                    <p id="ultimoParag">Esperamos que goste. s2 </p>
                </div>
                <div class="card2">
                    <h3>Desenvolvedores da RandomRest</h3>
                    <p id="primeiroParag">Fala, colega!</p>
                    <p>
                        Aqui é o Natan, parceiro de RandomRest junto da Bia
                         que já deu um oi pra você na seção anterior.
                    </p>
                    <p>Vez ou outra quando entramos num site bacana (tipo o nosso rs)
                        bate uma curiosidade pra saber como são os criadores, né?
                    </p>
                    <p>Então aí vai uma foto nossa de registro pra conhecer nossas
                        carinhas.
                    </p>
                    <img src="./img/download.jpg" alt="Natan Mattos & Bia Amaral"/>
                </div>
            </div>

            <div class="center-column">
                <div class="card">
                    <h1>E aí, como é que você tá?</h1>
                    <h5>Primeiro texto do blog RandomRest, Dec 10, 2022.</h5>
                    <img src="./img/9.jpg" alt="imagemHome"/>
                    <p>Talvez faça um tempo desde que alguém tenha te feito essa pergunta..</p>
                    <p>Mas não tem problema não, estamos aqui para fazê-la pra você. E aí,
                        como é que você tá?
                    </p>
                </div>
                <div class="card">
                    <h2>2022 ----> 2023</h2>
                    <h5>Terceiro texto do blog RandomRest, Dec 11, 2022</h5>
                    <img src="./img/8.jpg" alt="imagemHome2"/>
                    <p>Dá pra acreditar que mais uma vez nos encontramos num final de ano?</p>
                    <p>Cara, particularmente, pra mim é quase irreal que daqui 2 semanas já
                        é natal e depois ano novo, e pah, outro ano nos é concedido.
                    </p>
                </div>
            </div>

            <div class="coluna-direita">
                <div class="card">
                    <h2>Diário Virtual</h2>
                    <p>Use o espaço abaixo pra registrar um pouquinho do 
                        que você está sentindo hoje.
                    </p>

                <div id="diario" class="diario">
                <form action = 'diarioadd.php' method = 'POST'>

                        <input type="text" id="texto" name= 'diario' class="input" placeholder="Hoje eu me sinto...">
                        <button onclick="adicionar();" id="botao" type ='submit' >Adicionar ao diário</button>
                  
                  
                        </form>      
                </div>
                        <div id="login">
                            </div>
                        <div id="tarefas" class="diario">
                        <br>
                            </div>
   
                </div>

                    <div class="card-direcionamento">
                        <h3>Direcionamento baseado no seu humor</h3>
                        <div class="direcionamento">
                            <p id="texto">Se sentindo meio desanimado?</p>
                                <p><a href="testeEndorfina.php"><i class="fa-solid fa-arrow-right"></i> 
                                    Doses de endorfina aqui!</a>
                                </p>
                            <p id="texto">Sentindo como se nada mais tivesse sentido?</p>    
                                <p><a href="testeSerotonina.php"><i class="fa-solid fa-arrow-right"></i> 
                                    Doses de serotonina aqui!</a>
                                </p>
                            <p id="texto">Viu um passarinho azul pela janela hoje?</p>    
                                <p><a href="testeOcitocina.php"><i class="fa-solid fa-arrow-right"></i> 
                                    Doses de ocitocina aqui!</a>
                                </p>
                        </div>    
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