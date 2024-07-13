<?php
session_start();

// Verifica se o usuário está logado e se a chave 'nome' está definida
$is_logged_in = isset($_SESSION['user_id']);
$user_name = $is_logged_in && isset($_SESSION['nome']) ? $_SESSION['nome'] : '';
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
        <a class="navbar-brand" href="#">Match-<span id="verse1">Verse</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Saiba Mais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Segurança</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Suporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Download</a>
                </li>
                <li class="nav-item dropdown" id="login-container">
                    <?php if ($is_logged_in): ?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bem-vindo, <?php echo htmlspecialchars($user_name); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item dropdown-text" href="logout.php">Sair</a></li>
                        </ul>
                    <?php else: ?>
                        <a href="#" class="nav-link futuristic-btn show-login" type="button">Entrar</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
