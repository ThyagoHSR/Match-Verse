<?php
include("conexao.php");

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('sss', $nome, $email, $senha_hash);

    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = 'Usuário cadastrado com sucesso';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Erro: ' . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Método de solicitação inválido';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
