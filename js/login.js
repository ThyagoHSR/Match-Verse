document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('login-form');
    const loginExclude = document.querySelector('.container');

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            const formData = new FormData(this);

            fetch('login.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    loginExclude.style.display = 'none';
                    const successToast = new bootstrap.Toast(document.getElementById('successToast'));
                    successToast.show();
                    const loginContainer = document.getElementById('login-container');
                    loginContainer.innerHTML = `
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bem-vindo, ${data.user_name}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item dropdown-text" href="logout.php">Sair</a></li>
                        </ul>
                    `;
                } else {
                    const errorToast = new bootstrap.Toast(document.getElementById('errorToast'));
                    errorToast.show();
                }
            })
            .catch(error => console.error('Erro:', error));
        });
    }
});
