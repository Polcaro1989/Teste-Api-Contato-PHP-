<?php
// Database details
$db_host = 'testinho-mariadb';
$db_username = 'root';
$db_password = 'root';
$db_name = 'api';

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally, you can set the character set (UTF-8 in this example)
    $conn->exec("SET NAMES utf8");
} catch (PDOException $e) {
    echo "Failed to connect to MySQL: " . $e->getMessage();
}
