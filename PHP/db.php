<?php
$host = '127.0.0.1';
$db   = 'cvlite_db';
$user = 'root';
$pass = ''; // altera se usares senha no MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão ao banco de dados: " . $e->getMessage());
}
?>
