<?php


include ('banco_dados/conexao.php');

session_start();
$nomec = $_SESSION['name'];
$data = date("Y/m/d");

$texto = $_POST['diario'];


if(!empty($texto)){

echo $texto;

$sql="INSERT INTO diario(usuario, texto, data) VALUES ('$nomec', '$texto', '$data')";
$sql_query = $mysqli->query($sql) or die("Falha na execução: " . $mysqli ->error);
header('location: meudiario.php');

}




else {
header('location: testehome.php');


}



?>