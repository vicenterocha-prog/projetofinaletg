<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vatapá da Mana</title>
    <link rel="stylesheet" href="stylecarrinho.css">
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <div class="produtos">
        <?php
        include 'conexaocarrinho.php';
        
        $sql = "SELECT id_produto, nome, quantidade, categoria, status, preco FROM produtos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='produto-card'>";
                echo "" . $row["id_produto"] . ".jpg' alt='" . ($row["nome"]) . "'>";
                echo "<h3>" . htmlspecialchars($row["nome"]) . "</h3>";
                echo "<p>Preço: R$ " . number_format($row["preco"], 2, ',', '.') . "</p>";
                echo "<button onclick=\"adicionarAoCarrinho('" . htmlspecialchars($row["nome"]) . "', " . $row["preco"] . ")\">Adicionar ao Carrinho</button>";
                echo "</div>";
            }
             } else {
            echo "Nenhum produto encontrado.";
        }

        $conn->close();
        ?>
    </div>

    <h2>Seu Carrinho</h2>
    <div id="carrinho">
        <p>Seu carrinho está vazio.</p>
    </div>

    <footer>
        <nav>
            <ul>
                <li><a href="cardapio.html">Cardápio Detalhado</a></li>
                <li><a href="index.php">Principal</a></li>
                <li><a href="formulario.html">Cadastre-se</a></li>
                <li><a href="avalienos.html">Avalie-nos</a></li>
            </ul>
        </nav>
        <p>&copy; 2024 Vatapá da Mana. Todos os direitos reservados.</p>
    </footer>

    <script src="scriptcarrinho.js"></script>
</body>
</html>
