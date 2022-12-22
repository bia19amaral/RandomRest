<?php
include('banco_dados/conexao.php');
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);

if(isset($_POST['email']) && isset($_POST['senha'])) {

    if(strlen($email) == 0){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['nao_email']=true;
        exit();
        //echo "Preencha seu email";
    } else if(strlen($senha) == 0){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['nao_senha']=true; 
        exit();
        //echo "Preencha sua senha";  
    } else{

        $sql_cod = "SELECT * FROM cadastro WHERE email = '$email' AND senha = md5('$senha');";
        $sql_query = $mysqli->query($sql_cod) or die("Falha na execução: " . $mysqli ->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['name'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            
            header("Location: testehome.php");

        } else {
            if(!isset($_SESSION)){
                session_start();
           }
            $_SESSION['nao_autenticado']=true;
            header("Location: login_cadastro.php");
            //echo "Falha ao logar, email ou senha incorretos";
        }
    }
    
}

?>