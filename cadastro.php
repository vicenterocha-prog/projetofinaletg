<?php
// Inclui o arquivo de conexão com o banco de dados
include 'includes/funcoes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se todos os campos estão preenchidos
    if (isset($_POST['nome'], $_POST['cpf'], $_POST['endereco'], $_POST['cep']) && 
        !empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['endereco']) && !empty($_POST['cep'])) {
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];

        // Insere os dados na tabela usuarios
        $sql = "INSERT INTO usuarios (nome, cpf, endereco, cep) VALUES (?, ?, ?, ?)";

        // Verifica se a conexão está aberta antes de preparar a declaração
        if ($conn->ping()) {
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $nome, $cpf, $endereco, $cep);

            if ($stmt->execute()) {
                echo "Usuário cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o usuário: " . $conn->error;
            }

            $stmt->close();
        } else {
            echo "Erro: A conexão com o banco de dados foi fechada.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

$conn->close();
?>
