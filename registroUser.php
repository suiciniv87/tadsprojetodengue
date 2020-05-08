<?php
    include("conectaDB.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['email'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];


    $sql = "INSERT INTO `dados_pessoais` (`nome`, `email`, `senha`, `rg`, `cpf`, `endereco`, `telefone`, `cidade`, `bairro`, `estado`) VALUES ('$nome','$email','$senha','$rg','$cpf','$endereco','$telefone','$cidade','$bairro','$estado')";
 
    $result = mysqli_query($conexao,$sql);

?>

<html>
    <meta http-equiv="refresh" content="1; URL='registroCaso.php'"/>
</html>