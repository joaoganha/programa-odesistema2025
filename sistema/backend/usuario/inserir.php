<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

$sql = "INSERT INTO usuario(nome, email, cpf, senha)
        VALUES ('$nome', '$email', '$cpf', '$senha')";
//executa sql
$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "$nome cadastrado com Successo!";

//mandar para pagina principal
header('Location:../../principal.php');
?>