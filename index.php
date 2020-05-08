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
        <h2>Sistema de Cadastro do Zer@Dengue</h2>
        <form name="registro" id="registro" method="post" action="registroUser.php">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" name="rg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="cpf">CPF (Só números)</label>
                        <input type="number" class="form-control" name="cpf">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="telefone">Telefone (Só números)</label>
                        <input type="number" class="form-control" name="telefone">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" name="estado">
                            <option>Selecione um estado</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class="btn btn-light" onclick="registra();">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar Formulário</button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
function registra() {
    if (registro.nome.value == "" || registro.email.value == "" || registro.senha.value == "" || registro.rg.value == "" || registro.cpf.value == "" || registro.endereco.value == "" || registro.telefone.value == "" || registro.cidade.value == "" || registro.bairro.value == "" || registro.estado.value == "Selecione um estado") { 
        Swal.fire({
            icon: 'warning',
            title: 'Problema',
            text: 'Existem campos não preenchidos!'
        })
        event.preventDefault();
    }
    else {
        event.preventDefault();
        Swal.fire({
            icon: 'success',
            title: 'Muito bem!',
            text: 'Registrado com sucesso!'
        }).then((result) => {
            if (result.value) {
                document.getElementById("registro"),
                    setTimeout(registro.submit(), 5000);
            }
        })
    }
};
</script>
</body>
</html>