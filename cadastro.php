<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO cadastro(nome, email, senha) 
    VALUES ('$nome', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    ?>