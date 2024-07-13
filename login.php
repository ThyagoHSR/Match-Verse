<?php
include("conexao.php");
session_start();

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT * FROM cadastro WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($senha, $user['senha'])) {
            // Definindo a sessão com o nome correto
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['nome'] = $user['nome']; // Certifique-se de que 'nome' está correto

            $response['status'] = 'success';
            $response['message'] = 'Login bem-sucedido';
            $response['user_name'] = $user['nome']; // Adiciona o nome do usuário na resposta
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Email ou senha incorretos';
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Erro ao consultar banco de dados';
    }

    mysqli_close($conexao);
} else {
    $response['status'] = 'error';
    $response['message'] = 'Método de solicitação inválido';
}

echo json_encode($response);
?>
