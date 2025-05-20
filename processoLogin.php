<?php
// Conexão com o banco de dados
$conn = new mysqli("ASUSRAFAEL", "HAMBURGUER", "hamburguer", "bd_toicos");

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

// Consulta para verificar o usuário
$sql = "SELECT * FROM usuarios WHERE EMAIL = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Verifica se a senha está correta
    $usuario = $result->fetch_assoc();
    if (password_verify($senha, $usuario['SENHA'])) {
        // Login bem-sucedido
        $_SESSION['ID_USUARIO'] = $usuario['ID_USUARIO'];
        $_SESSION['NOME_USU'] = $usuario['NOME_USU'];
        $_SESSION['TIPO'] = $usuario['TIPO'];
        echo "Login realizado com sucesso!";
        // Redireciona para a página inicial ou painel
        header("Location: painel.php");
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