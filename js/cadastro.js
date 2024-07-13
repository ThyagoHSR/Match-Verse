const cadastroForm = document.getElementById('cadastro-form');
    if (cadastroForm) {
        cadastroForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            const formData = new FormData(this);

            fetch('cadastro.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    cadastroForm.reset(); // Reseta o formulário
                    const toast = new bootstrap.Toast(document.getElementById('cadastroToast'));
                    toast.show();
                } else {
                    const toast = new bootstrap.Toast(document.getElementById('cadastroFalhouToast'));
                    toast.show(); 
                }
            })
            .catch(error => console.error('Erro:', error));
        });
    }