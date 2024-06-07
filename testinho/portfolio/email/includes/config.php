<?php
// Configuração do banco de dados
define('DB_HOST', 'testinho-mariadb');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'email');

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}
