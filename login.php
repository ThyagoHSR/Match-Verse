<?php
include("conexao.php");

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($senha, $user['senha'])) {
        $response['status'] = 'success';
        $response['message'] = 'Login bem-sucedido';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Email ou senha incorretos';
    }

    mysqli_close($conexao);
} else {
    $response['status'] = 'error';
    $response['message'] = 'Método de solicitação inválido';
}

echo json_encode($response);
?>