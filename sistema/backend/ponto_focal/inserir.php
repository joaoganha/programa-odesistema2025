<?php
include '../conexao.php';

//receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$razao_social = $_REQUEST['razao_social'];
$tipo = $_REQUEST['tipo'];
$cnpj_cpf = $_REQUEST['cnpj_cpf'];
$endereco = $_REQUEST['endereco'];
$telefone = $_REQUEST['telefone'];
$celular = $_REQUEST['celular'];
$email = $_REQUEST['email'];
$id_cidade_fk = $_REQUEST['id_cidade_fk'];


$sql = "INSERT INTO ponto_focal (nome, razao_social, tipo, cnpj_cpf, endereco, telefone, celular, email, id_cidade_fk) VALUES ('$nome', '$razao_social', '$tipo', '$cnpj_cpf', '$endereco', '$telefone', '$celular', '$email', '$id_cidade_fk')";
// Executa o sql
$resultado = mysqli_query($conexao, $sql);
//mandar para a página principal
header('Location: ../../ponto_focal.php');


session_start();
$_SESSION['mensagem'] = "Cadastrado com Sucesso!";
?>
