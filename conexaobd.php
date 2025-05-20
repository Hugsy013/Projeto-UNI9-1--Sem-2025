<?php 

// métodos de conexão de BD mysqli, mysql e pdo.

// conexão com dreamweaver
$hostname_conn_bd_sim = "ASUSRAFAEL";
$database_conn_bd_sim = "bd_toicos";
$username_conn_bd_sim = "HAMBURGUER";
$password_conn_bd_sim = "hamburguer";

//criando a conexão usando as variáveis

$conn_bd_toicos = mysqli_connect($hostname_conn_bd_toicos, $username_conn_bd_toicos, $password_conn_bd_toicos, $database_conn_bd_toicos) or trigger_error(mysqli_errno(), e_user_error());

//verification da conexao: echo "oi"


?>