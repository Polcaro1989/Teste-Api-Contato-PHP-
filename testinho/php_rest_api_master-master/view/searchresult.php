<?php
require('config.php');

ini_set('display_errors', 10);
ini_set('display_startup_errors', 10);
error_reporting(E_ALL);

$return = '';

if (isset($_POST["query"])) {
    $search = $_POST["query"];

    $query = "SELECT Contato.*, Empresa.nome AS empresa_nome
        FROM Contato
        LEFT JOIN Empresa ON Contato.empresa_id = Empresa.id
        WHERE Contato.id LIKE ?
        OR Contato.nome LIKE ?
        OR Contato.sobrenome LIKE ?
        OR Contato.data_nascimento LIKE ?
        OR Contato.telefone LIKE ?
        OR Contato.celular LIKE ?
        OR Contato.email LIKE ?
        OR Contato.empresa_id LIKE ?
        OR Empresa.nome LIKE ?";

    $stmt = $conn->prepare($query);

    $params = array("%$search%", "%$search%", "%$search%", "%$search%", "%$search%", "%$search%", "%$search%", "%$search%", "%$search%");
    $stmt->execute($params);
} else {
    $query = "SELECT Contato.*, Empresa.nome AS empresa_nome
        FROM Contato
        LEFT JOIN Empresa ON Contato.empresa_id = Empresa.id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}

if ($stmt->rowCount() > 0) {
    $return .= '
    <div class="table-responsive">
        <table class="table table bordered">
        <tr>
        <th ">ID</th>
        <th ">Nome</th>
        <th ">Sobrenome</th>
        <th ">Data nascimento</th>
        <th ">Telefone</th>
        <th ">Celular</th>
        <th ">Email</th>
        <th ">Empresa</th>
        <th ">Empresa_id</th>
        <th ">Ação</th>
       
        </tr>';

    while ($row1 = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $return .= '
        <tr>
        <td>' . $row1["id"] . '</td>
        <td>' . $row1["nome"] . '</td>
        <td>' . $row1["sobrenome"] . '</td>
        <td>' . $row1["data_nascimento"] . '</td>
        <td>' . $row1["telefone"] . '</td>
        <td>' . $row1["celular"] . '</td>
        <td>' . $row1["email"] . '</td>
        <td>' . $row1["empresa_nome"] . '</td>
        <td>' . $row1["empresa_id"] . '</td>
        <td><a class="btn btn-success mr-2" href="update.php?id=' . $row1['id'] . '&empresa_id=' . $row1['empresa_id'] . '"><i class="bi bi-pencil"></i></a></td>
        <td>
        <td>
        <a class="btn btn-danger" href="delete.php?id='  . $row1['id'] . '">
            <i class="bi bi-trash"></i>
        </a>
    </td>
        </tr>';
    }
    echo $return;
} else {
    echo 'Nenhum resultado contendo todos os termos de sua pesquisa foi encontrado.';
}
