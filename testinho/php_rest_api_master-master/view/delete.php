<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Excluir Contato</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3 class="well">Excluir Contato</h3>
        </div>

        <?php
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            echo '<div class="row">';
            echo '<form class="form-horizontal" method="POST" action="delete.php">'; // Use method "POST"
            echo '<input type="hidden" name="id" value="' . $id . '" />';
            echo '<div class="form-group">';
            echo '<button type="submit" class="btn btn-danger  deleteContatoBtn" data-id="" name="excluir">Sim</button>';
            echo '<a href="index.php" class="btn btn-default">Não</a>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '<div id="message-container"></div>';

        } else {
            echo '<div class="alert alert-danger">ID do contato ausente ou inválido. Certifique-se de fornecer um ID válido.</div>';
        }
        ?>

        <!-- Mensagem de sucesso -->
        <div class="alert alert-success" id="success-message" style="display: none;"></div>

        <!-- Mensagem de erro -->
        <div class="alert alert-danger" id="error-message" style="display: none;"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/delete_contato_api.js"></script>

</body>
</html>
