<?php
    include("conectaDB.php");

    $endereco_ocorrencia = $_POST['endereco_ocorrencia'];
    $descricao = $_POST['descricao'];
    if (isset($_FILES['imagem'])) {
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "uploads/";
        
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
    
        $sql = "INSERT INTO `informacoes`(`idInfo`, `endereco_ocorrencia`, `imagem`, `data`, `descricao`) VALUES (null, '$endereco_ocorrencia', '$novo_nome', NOW(), '$descricao')";

        if($conexao->query($sql))
            echo "Arquivo enviado com sucesso!";
        else
            echo "Falha ao enviar o arquivo!";
    }
?>
<html>
    <meta http-equiv="refresh" content="2; URL='index.php'"/>
</html>