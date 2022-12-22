        <?php
            include ('banco_dados/conexao.php');
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

        if (isset($_POST['nome']) && (isset($_POST['email'])) && (isset($_POST['senha']))) {
                
                $sql_cod = "select * from cadastro where email='$email' ";
                $sql_query = $mysqli -> query ($sql_cod) or die ('Falha na execução' . $mysqli -> error);
                $quantidade = $sql_query->num_rows;
                
                if($quantidade == 1) {
    
                $usuario = $sql_query ->fetch_assoc();
    
                if(!isset($_SESSION)){
                    session_start();
                }
            
                $_SESSION['email'] = $email;
                $_SESSION['nome']= $nome;
                $_SESSION['ja_cadastrado']= true;
                 header('Location:login_cadastro.php'); 
                   
    
            }   
            else 
                if(!empty($nome) && !empty($nome) && !empty($senha)){                 
            
                        $sql="INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email',md5('$senha'))";
                }
        if(mysqli_query($mysqli, $sql)){
        //echo "Usuário cadastrado com sucesso";
              
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['usuario_cadastrado'] = true;
                 header('Location:login_cadastro.php');

    }
        else{
            if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['usuario_naocadastrado'] = true;
                 header('Location:login_cadastro.php');        }
         mysqli_close($mysqli);
        }

            ?>