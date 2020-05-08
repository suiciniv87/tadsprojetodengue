<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset="UTF-8">
    <title>Zer@Dengue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="container-fluid">
        <h2>Zer@Dengue - Registrar Denúncia</h2>
        <form enctype="multipart/form-data" action="enviaCaso.php" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="endereco_ocorrencia">Endereço da Ocorrência</label>
                        <input name="endereco_ocorrencia" type="text" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="descricao">Descrição da Ocorrência</label>
                        <textarea name="descricao" type="textarea" class="form-control" rows="5"></textarea>
                    </div>    
                </div>
            </div>
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                <div><input name="imagem" type="file" class="form-control-file"/></div>
                
                <div><button class="btn btn-light" type="submit">Enviar</button></div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
