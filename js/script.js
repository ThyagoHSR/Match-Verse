document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".floating-element");

    elements.forEach(elem => {
        // Define a posição inicial
        setInitialPosition(elem);
        // Inicia a movimentação flutuante
        startMoving(elem);

        // Para a movimentação ao passar o mouse
        elem.addEventListener("mouseenter", () => clearInterval(elem.moveInterval));
        // Retoma a movimentação ao tirar o mouse
        elem.addEventListener("mouseleave", () => startMoving(elem));
    });

    function setInitialPosition(elem) {
        const viewportWidth = window.innerWidth;
        const viewportHeight = window.innerHeight * 0.9; // Limita a altura a 90vh

        const maxX = viewportWidth - elem.clientWidth;
        const maxY = viewportHeight - elem.clientHeight;

        const randomX = Math.random() * maxX;
        const randomY = Math.random() * maxY;

        elem.style.left = `${randomX}px`;
        elem.style.top = `${randomY}px`;
    }

    function startMoving(elem) {
        elem.moveInterval = setInterval(() => moveRandomly(elem), 2000);
    }

    function moveRandomly(elem) {
        const viewportWidth = window.innerWidth;
        const viewportHeight = window.innerHeight * 0.9; // Limita a altura a 90vh

        const maxX = viewportWidth - elem.clientWidth;
        const maxY = viewportHeight - elem.clientHeight;

        const randomX = Math.random() * maxX;
        const randomY = Math.random() * maxY;

        elem.style.left = `${randomX}px`;
        elem.style.top = `${randomY}px`;
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const showLoginButtons = document.querySelectorAll('.show-login');
    const showCadastroButtons = document.querySelectorAll('.show-cadastro');
    const closeLoginButton = document.querySelector('.close-login');
    const closeCadastroButton = document.querySelector('.close-cadastro');
    const loginForm = document.querySelector('.container');
    const cadastroForm = document.querySelector('.container2');

    // Mostrar formulário de login
    showLoginButtons.forEach(button => {
        button.addEventListener('click', function() {
            cadastroForm.style.display = 'none';
            loginForm.style.display = 'block';
        });
    });

    // Mostrar formulário de cadastro
    showCadastroButtons.forEach(button => {
        button.addEventListener('click', function() {
            loginForm.style.display = 'none';
            cadastroForm.style.display = 'block';
        });
    });

    // Fechar formulário de login
    closeLoginButton.addEventListener('click', function() {
        loginForm.style.display = 'none';
    });

    // Fechar formulário de cadastro
    closeCadastroButton.addEventListener('click', function() {
        cadastroForm.style.display = 'none';
    });  
});





