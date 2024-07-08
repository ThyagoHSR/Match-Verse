<?php
include("conexao.php");

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

    if (mysqli_query($conexao, $sql)) {
        $response['status'] = 'success';
        $response['message'] = 'Usuário cadastrado com sucesso';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Erro: ' . mysqli_error($conexao);
    }

    mysqli_close($conexao);
} else {
    $response['status'] = 'error';
    $response['message'] = 'Método de solicitação inválido';
}

echo json_encode($response);
?>
