<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "usuario", "senha", "bd_toicos");

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

// Query para inserir os dados na tabela cliente
$sql = "INSERT INTO cliente (NOME_CLI, DATA_NASCIMENTO, EMAIL, CPF, ENDERECO_CLI, NUMERO_CELULAR, COMPLEMENTO)
        VALUES ('$nome', '$data_nascimento', '$email', '$cpf', '$endereco', '$numero_celular', '$complemento')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>