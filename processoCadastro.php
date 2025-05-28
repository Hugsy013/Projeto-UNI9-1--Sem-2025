<?php
// Conexão com o banco de dados
$conn = new mysqli("ASUSRAFAEL", "HAMBURGUER", "hamburguer", "bd_toicos");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Captura os dados do formulário
$nome = $_POST['NOME_CLI'];
$data_nascimento = $_POST['DATA_NASCIMENTO'];
$email = $_POST['EMAIL'];
$cpf = $_POST['CPF'];
$endereco = $_POST['ENDERECO_CLI'];
$numero_celular = $_POST['NUMERO_CELULAR'];
$complemento = $_POST['COMPLEMENTO'];
$senha = $_POST['SENHA'];

// Previne SQL Injection
$nome = $conn->real_escape_string($nome);
$data_nascimento = $conn->real_escape_string($data_nascimento);
$email = $conn->real_escape_string($email);
$cpf = $conn->real_escape_string($cpf);
$endereco = $conn->real_escape_string($endereco);
$numero_celular = $conn->real_escape_string($numero_celular);
$complemento = $conn->real_escape_string($complemento);

// Query para inserir os dados na tabela cliente
$sql = "INSERT INTO cliente (NOME_CLI, DATA_NASCIMENTO, EMAIL, CPF, ENDERECO_CLI, NUMERO_CELULAR, COMPLEMENTO,SENHA)
        VALUES ('$nome', '$data_nascimento', '$email', '$cpf', '$endereco', '$numero_celular', '$complemento','$senha');";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
    header("Location: http://192.168.0.65:8080/projeto/cardapio.html");
        exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>