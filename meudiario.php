<?php
    include ('banco_dados/conexao.php');
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

    <title>Diário Virtual</title>
    <link rel="shortcut icon" href="./img/randomrest.png">
</head>
<body>
    <div class="InicioDiario">
    <style>
            .InicioDiario
            {
                opacity:0.9;
                }
        </style>
       <div class="header"> 
        <nav id="navbar-header">
            <a href="testehome.php" class="logo">
                <i class="fa-solid fa-hashtag"></i>
                    <span>RandomRest</span>
            </a>
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
        <div class="sobre">
            <div class="coluna-centro">
                <div class="card">
                    <h1>Registros do Diário Virtual</h1>
                    <h5>Veja aqui abaixo.</h5>
                    <style>
                        .comments{
                                margin-top: 15px;
                                color: #29292b;
                                border:1px solid #29292b;
                                border-radius:10px;
                                background: #fbc6da;
                                padding: 10px;
                        }
                      </style>     
                    <?php 
                        $nomec = $_SESSION['name'];

                        $sql ="SELECT * FROM diario WHERE usuario = '$nomec' " ;
                        $sql_query = $mysqli->query($sql);
                               
                                while ($dados = mysqli_fetch_assoc($sql_query)) {
                                    echo '<div class="comments"> '
                                            . '<div class="names"> 
                                            '.$dados['texto'].'<br>'.$dados['data'].'</div></div> ';
                                }
                    ?>
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