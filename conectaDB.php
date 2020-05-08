<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aedes";

$conexao = new mysqli($servername, $username, $password, $dbname);
  
if (!$conexao) {
    die("Não foi possível conectar ao banco de dados" . mysqli_connect_error());
}
?>