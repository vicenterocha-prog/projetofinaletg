let carrinho = [];

function adicionarAoCarrinho(produto, preco) {
    // Adiciona o produto ao carrinho
    carrinho.push({ produto: produto, preco: preco });
    atualizarCarrinho();
}

function atualizarCarrinho() {
    const carrinhoDiv = document.getElementById('carrinho');
    carrinhoDiv.innerHTML = '';

    if (carrinho.length === 0) {
        carrinhoDiv.innerHTML = '<p>Seu carrinho está vazio.</p>';
    } else {
        let total = 0;
        const ul = document.createElement('ul');

        carrinho.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.produto} - R$ ${item.preco.toFixed(2)}`;
            ul.appendChild(li);
            total += item.preco;
        });

        carrinhoDiv.appendChild(ul);
        const totalP = document.createElement('p');
        totalP.textContent = `Total: R$ ${total.toFixed(2)}`;
        carrinhoDiv.appendChild(totalP);

        const checkoutButton = document.createElement('button');
        checkoutButton.textContent = 'Finalizar Compra';
        checkoutButton.onclick = finalizarCompra;
        carrinhoDiv.appendChild(checkoutButton);
    }
}

function finalizarCompra() {
    alert('Compra finalizada com sucesso!');
    carrinho = [];
    atualizarCarrinho();
}


