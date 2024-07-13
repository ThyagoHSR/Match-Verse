<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Match-Verso Plataforma digital para encontros virtuais no metaverso.">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/forms.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Match Verso</title>
</head>
<body>
<!-- Header -->
<?php include "includes/header/header.php"; ?> 

<div data-aos="fade-right" data-aos-duration="3000">
    <main class="sessao1">
        <h1 class="main-title">Dê um Match. Converse.
             <br> E se Encontre no
              <span id="verse">Match-<span id="verse1">Verse.</span>
        </h1>
        <button class="btn1" type="button">Começar Agora</button>
    </main>
</div>

<!-- Login Pop UP -->
<?php include "includes/forms/login-form.php"; ?> 

<!-- Cadastro Pop UP -->
<?php include "includes/forms/cadastro-form.php"; ?> 

<!-- Floating Elements -->
<?php include "includes/elements/floating-elements.php"; ?> 

<!-- Toast Cadastro Notification -->
<?php include "includes/notifications/cadastro_sucess_notification.php"; ?> 

<!-- Toast Cadastro Error Notification -->
<?php include "includes/notifications/cadastro_error_notification.php"; ?> 

<!-- Toast Sucess Login Notification -->
<?php include "includes/notifications/login_sucess_notification.php"; ?> 

<!-- Toast Error Login Notification -->
<?php include "includes/notifications/login_error_notification.php"; ?> 

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="js/script.js"></script>
<script src="js/login.js"></script>
<script src="js/cadastro.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
