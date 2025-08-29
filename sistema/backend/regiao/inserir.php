<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];


$sql = "INSERT INTO regiao (nome) VALUES ('$nome')";
// Executa o sql
$resultado = mysqli_query($conexao, $sql);
//mandar para a página principal
header('Location: ../../regiao.php');


session_start();
$_SESSION['mensagem'] = "Cadastrado com Sucesso!";
?>
