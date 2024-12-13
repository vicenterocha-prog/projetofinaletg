<?php
$servername = "127.0.0.1";
$username = "root";
$password = ""; // Sua senha do MySQL
$dbname = "restaurante"; // nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
