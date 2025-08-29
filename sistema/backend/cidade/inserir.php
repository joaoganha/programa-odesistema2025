<?php
include '../conexao.php';

//receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$cep = $_REQUEST['cep'];
$estado = $_REQUEST['estado'];
$id_regiao_fk = $_REQUEST['id_regiao_fk'];


$sql = "INSERT INTO cidade (nome, cep, estado, id_regiao_fk) VALUES ('$nome', '$cep', '$estado', '$id_regiao_fk')";
// Executa o sql
$resultado = mysqli_query($conexao, $sql);
//mandar para a página principal
header('Location: ../../cidade.php');


session_start();
$_SESSION['mensagem'] = "Cadastrado com Sucesso!";
?>
