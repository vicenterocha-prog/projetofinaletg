document.addEventListener('DOMContentLoaded', function() {
    const botoesAdicionarCarrinho = document.querySelectorAll('.produto-card button');

    botoesAdicionarCarrinho.forEach(botao => {
        botao.addEventListener('click', function() {
            alert('Produto adicionado ao carrinho!');
        });
    });
});

$(document).ready(function(){
    $('.slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

const slogan = document.getElementById('slogan');
const languageButtons = document.querySelectorAll('.language');
const slogans = {
  pt: 'Bem-vindo!',
  es: '¡Bienvenido!',
  en: 'Welcome!',
  fr: 'Bienvenue!',
  it: 'Benvenuto!'
};

languageButtons.forEach(button => {
  button.addEventListener('click', () => {
    const lang = button.dataset.lang;
    slogan.textContent = slogans[lang];
    // Adicionar a classe "blink" após a troca de idioma (opcional)
    slogan.classList.add('blink');
    // Remover a classe "blink" após alguns segundos (opcional)
    setTimeout(() => {
      slogan.classList.remove('blink');
    }, 2000);
  });
});
