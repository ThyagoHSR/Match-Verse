<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";

// Criar conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Verificar conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>