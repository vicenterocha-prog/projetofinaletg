<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vatapá da Mana</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
</head>
<body>
    <header>
        <h1>Vatapá da Mana</h1>
    </header>
    <main id="home">
        <section class="banner">
            <h1 id="slogan">Bem-vindos!</h1>
            <div class="language-switcher">
                <button class="language" data-lang="pt">PT</button>
                <button class="language" data-lang="es">ES</button>
                <button class="language" data-lang="en">EN</button>
                <button class="language" data-lang="fr">FR</button>
                <button class="language" data-lang="it">IT</button>
            </div>
        </section>
        <section id="produtos" class="destaques">
    <h2>Pratos em Destaque</h2>
    <div class="slider">
        <?php
        // Inclui o arquivo que contém a conexão com o banco de dados e a consulta
        include 'conexao.php';
        
        // Verifica se os dados foram retornados

        $produtos = array(); // Inicializando como um array vazio

        if ($produtos) {
            foreach ($produtos as $produto) {
                echo '<div class="produto-card">';
                echo '<img src="imagens/' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
                echo '<h3>' . $produto['nome'] . '</h3>';
                echo '<p>' . $produto['descricao'] . '</p>';
                echo '<button><a href="carrinho.php">Vá ao Carrinho</a></button>';
                echo '</div>';
            }
        } else {
            echo "";
        }

        $produtosAdicionais = [
            [
                'nome' => 'Pato no Tucupi',
                'descricao' => 'Delicioso prato típico paraense com pato cozido no tucupi e jambu.',
                'imagem' => '2_pato_no_tucupi.jpg'
            ],
            [
                'nome' => 'Moqueca de Pescado',
                'descricao' => 'Moqueca de peixe com temperos típicos e leite de coco, um prato tradicional e saboroso.',
                'imagem' => 'moqueca_de_pescado.jpg'
            ],
            [
                'nome' => 'Feijoada Paraense',
                'descricao' => 'Feijoada com ingredientes típicos da culinária paraense, incluindo feijão preto e carnes.',
                'imagem' => 'feijoada_paraense.jpg'
            ],
            [
                'nome' => 'Vatapá',
                'descricao' => 'Tradicional vatapá feito com camarão, pão, leite de coco e amendoim.',
                'imagem' => 'vatapa.jpg'
            ],
            [
                'nome' => 'Farofa de Mandioca',
                'descricao' => 'Farofa crocante de mandioca, perfeita como acompanhamento para diversos pratos.',
                'imagem' => 'farofa_de_mandioca.jpg'
            ],
            [
                'nome' => 'Açaí',
                'descricao' => 'Açaí na tigela com granola, banana e mel, uma opção refrescante e energética.',
                'imagem' => 'acai.jpg'
            ],
            [
                'nome' => 'Cupuaçu',
                'descricao' => 'Sobremesa de cupuaçu, uma fruta típica da Amazônia, com sabor marcante e delicioso.',
                'imagem' => 'cupuaçu.jpg'
            ],
            [
                'nome' => 'Tacacá',
                'descricao' => 'Tacacá, um caldo típico da região amazônica feito com tucupi, jambu e camarão.',
                'imagem' => 'tacaca.jpg'
            ],
            [
                'nome' => 'Paçoca de Amendoim',
                'descricao' => 'Doce de paçoca feito com amendoim torrado, açúcar e sal, uma delícia brasileira.',
                'imagem' => 'pacoca_de_amendoim.jpg'
            ],
            [
                'nome' => 'Sorvete de Açaí',
                'descricao' => 'Sorvete cremoso de açaí, ideal para se refrescar nos dias quentes.',
                'imagem' => 'sorvete_de_acai.jpg'
            ]
        ];

        foreach ($produtosAdicionais as $produto) {
            echo '<div class="produto-card">';
            echo '<img src="imagens/' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
            echo '<h3>' . $produto['nome'] . '</h3>';
            echo '<p>' . $produto['descricao'] . '</p>';
            echo '<button><a href="carrinho.php">Vá ao Carrinho</a></button>';
            echo '</div>';
        }
        ?>
    </div>
</section>
          
        <section id="sobre">
            <h2>Sobre Nossa Culinária</h2>
            <p>No Vatapá da Mana, acreditamos que cada prato tem o poder de levar você em uma viagem pelos sabores e tradições do norte do Brasil. Nossos pratos são preparados com ingredientes frescos e autênticos, trazendo o melhor da culinária local para a sua mesa.</p>
            <p>Desde a escolha dos ingredientes até o preparo final, cada detalhe é pensado para proporcionar uma experiência gastronômica única. Nossas receitas são inspiradas nas tradições culinárias da região, sem nunca comprometer a qualidade e o sabor. Queremos que você se sinta em casa em cada refeição.</p>
            <p>Explore nosso cardápio e descubra a combinação perfeita de tradição e sabor. Seja para um almoço rápido ou um jantar especial, temos o prato ideal para cada ocasião.</p>
                            
          </section>
    </main>
    <footer>
    <nav>
        <ul>
            <li><a href="cardapio.html">Cardápio Detalhado</a></li>
            <li><a href="carrinho.php">Carrinho Compras</a></li>
            <li><a href="formulario.html">Cadastre-se</a></li>
            <li><a href="avalienos.html">Avalie-nos</a></li>
        </ul>
    </nav>
            <p>&copy; 2024 Vatapá da Mana. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
