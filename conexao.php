<?php
// Dados de conexão (substitua pelos seus dados)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restaurante";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "";
}

// Executar uma consulta (exemplo)
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

// ... (resto do seu código)