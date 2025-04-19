<?php
$host = 'localhost'; // Endereço do servidor MySQL
$dbname = 'restaurante';
$username = 'root'; // Seu usuário MySQL
$password = ''; // Sua senha MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
}
?>
