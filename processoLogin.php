<?php

// Inicia a sessão
session_start();

// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "bd_toicos");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Captura os dados do formulário
$email = $_POST['EMAIL'];
$senha = $_POST['SENHA'];

// Previne SQL Injection
$email = $conn->real_escape_string($email);
$senha = $conn->real_escape_string($senha);

// Consulta para verificar se o e-mail existe
$sql = "SELECT SENHA, IDUSUARIO FROM cliente WHERE EMAIL = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // E-mail encontrado, busca a senha
    $usuario = $result->fetch_assoc();
    if ($senha === $usuario['SENHA']) {
        // Login bem-sucedido
        $_SESSION['IDUSUARIO'] = $usuario['IDUSUARIO'];
        echo "Login realizado com sucesso!";
        header("Location: http://192.168.0.65:8080/projeto/cardapio.html");
        exit();
    } else {
        // Senha incorreta
        echo "Senha incorreta!";
    }
} else {
    // Usuário não encontrado
    echo "Usuário não encontrado!";
}

// Fecha a conexão
$conn->close();
?>