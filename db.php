<?php
// db.php
// Configurações - altere conforme seu ambiente
$db_host = '127.0.0.1';
$db_name = 'cvlite_db';
$db_user = 'root';
$db_pass = ''; // se usa XAMPP normalmente é vazio

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $options);
} catch (PDOException $e) {
    // Em produção exiba um erro amigável, registre o real
    exit('Erro de conexão ao banco de dados: ' . $e->getMessage());
}
