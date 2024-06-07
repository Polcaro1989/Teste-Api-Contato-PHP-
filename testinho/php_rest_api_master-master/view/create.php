<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Adicionar Contato</title>
</head>

<body>
    <div class="container">
        <div class="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well"> Adicionar Contato </h3>
                </div>
                <div id="message-container"></div>

                <div class="card-body">
                    <form id="contato-form" class="form-horizontal" method="post">
                        <div class="control-group">
                            <label class="control-label">Nome da Empresa <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input id="nomeEmpresa" size="50" class="form-control" name="nomeEmpresa" type="text" placeholder="Nome da Empresa" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nome <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input id="nome" size="50" class="form-control" name="nome" type="text" placeholder="Nome" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sobrenome</label>
                            <div class="controls">
                                <input id="sobrenome" size="50" class="form-control" name="sobrenome" type="text" placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Data de Nascimento</label>
                            <div class="controls">
                                <input id="data_nascimento" size="50" class="form-control" name="data_nascimento" type="text" placeholder="Data de Nascimento">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Telefone</label>
                            <div class="controls">
                                <input id="telefone" size="50" class ="form-control" name="telefone" type="text" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Celular</label>
                            <div class="controls">
                                <input id="celular" size="50" class="form-control" name="celular" type="text" placeholder="Celular">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input id="email" size="50" class="form-control" name="email" type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-actions">
                            <br />
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                            <a href="index.php" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/adicionar_contato_api.js"></script>
</body>
</html>
