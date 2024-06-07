<?php
include 'config/database.php';

if (isset($_GET['id'])) {
    $contato_id = $_GET['id'];

    // Consulta para buscar as informações do contato com base no ID
    $sql = "SELECT c.id, c.nome, c.sobrenome, c.data_nascimento, c.telefone, c.celular, c.email, c.empresa_id, e.nome as empresa_nome
            FROM Contato c
            LEFT JOIN Empresa e ON c.empresa_id = e.id
            WHERE c.id = :contato_id";

    try {
        $pdo = new PDO("mysql:host=testinho-mariadb;dbname=api", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':contato_id', $contato_id, PDO::PARAM_INT);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
    }
} else {
    echo "ID do contato não especificado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Resto do seu código do cabeçalho -->

    
</head>

<body>
    <div class="container">
        <div class="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well"> Editar Contato </h3>
                </div>
                <div id="message-container"></div>
                <div class="card-body">
                    <form id="contato-form" class="form-horizontal" method="post">
                        <input type="hidden" id="contato_id" name="contato_id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" id="empresa_id" name="empresa_id" value="<?php echo $row['empresa_id']; ?>">
                        
                        <div class="control-group">
                            <label class="control-label">ID da Empresa</label>
                            <div class="controls">
                                <input id="empresa_id" size="50" class="form-control" name="empresa_id" type="text" placeholder="ID da Empresa" value="<?php echo $row['empresa_id']; ?>" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Nome da Empresa</label>
                            <div class="controls">
                                <input id="nomeEmpresa" size="50" class="form-control" name="empresa_nome" type="text" placeholder="Nome da Empresa" value="<?php echo $row['empresa_nome']; ?>">
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">ID do Contato</label>
                            <div class="controls">
                                <input id="contato_id" size="50" class="form-control" name="contato_id" type="text" placeholder="ID do Contato" value="<?php echo $row['id']; ?>" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Nome</label>
                            <div class="controls">
                                <input id="nome" size="50" class="form-control" name="nome" type="text" placeholder="Nome" value="<?php echo $row['nome']; ?>" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Sobrenome</label>
                            <div class="controls">
                                <input id="sobrenome" size="50" class="form-control" name="sobrenome" type="text" placeholder="Sobrenome"value="<?php echo $row['sobrenome']; ?>" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Data de Nascimento</label>
                            <div class="controls">
                                <input id="data_nascimento" size="50" class="form-control" name="data_nascimento" type="text" placeholder="Data de Nascimento"value="<?php echo $row['data_nascimento']; ?>" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Telefone</label>
                            <div class="controls">
                                <input id="telefone" size="50" class="form-control" name="telefone" type="text" placeholder="Telefone"value="<?php echo $row['telefone']; ?>" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Celular</label>
                            <div class="controls">
                                <input id="celular" size="50" class="form-control" name="celular" type="text" placeholder="Celular"value="<?php echo $row['celular']; ?>" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input id="email" size="50" class="form-control" name="email" type="text" placeholder="Email"value="<?php echo $row['email']; ?>" required>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <br />
                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
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
    <script src="assets/js/editar_contato_api.js"></script>

</body>

</html>
