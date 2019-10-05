<?php

include_once("conexao.php");

$nome  =  filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email  =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$empresa  =  filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);

// Inserir clientes no MYSQL
$result_usuario = "INSERT INTO clientes (nome, email, empresa) VALUES ('$nome', '$email', '$empresa')";
$resultado_usuario = \mysqli_query($conn,$result_usuario);

// Retornar para o formulario
if(mysqli_insert_id($conn)){
    header("Location: index.html");
} else {
    header("Location: index.html");
}
?>
