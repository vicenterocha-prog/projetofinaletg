<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexaoavalienos.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se todos os campos estão preenchidos
    if (isset($_POST['nome'], $_POST['avaliacao'], $_POST['comentarios']) && 
        !empty($_POST['nome']) && !empty($_POST['avaliacao']) && !empty($_POST['comentarios'])) {
        
        $nome = $_POST['nome'];
        $avaliacao = $_POST['avaliacao'];
        $comentarios = $_POST['comentarios'];

        // Insere os dados na tabela de avaliações
        $sql = "INSERT INTO avaliacoes (nome, avaliacao, comentarios) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $nome, $avaliacao, $comentarios);

        if ($stmt->execute()) {
            $message = "Avaliação enviada com sucesso!";
        } else {
            $message = "Erro ao enviar a avaliação: " . $conn->error;
        }

        $stmt->close();
    } else {
        $message = "Por favor, preencha todos os campos.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Avaliação</title>
</head>
<body>
    <h1>Processamento de Avaliação</h1>
    <p><?php echo $message; ?></p>
    <a href="avalienos.html">Voltar</a>
</body>
</html>

