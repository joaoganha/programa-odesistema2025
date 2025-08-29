<?php
    include '../conexao.php';

    //receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$cep = $_REQUEST['cep'];
$estado = $_REQUEST['estado'];
$id_regiao_fk = $_REQUEST['id_regiao_fk'];

$sql = "UPDATE cidade SET nome='$nome', cep='$cep', estado='$estado', id_regiao_fk='$id_regiao_fk' WHERE id='$id' ";
//Executar o sql
mysqli_query($conexao, $sql);
//mandar para a página principal

session_start();
$_SESSION['mensagem'] = "Alterado com Sucesso!";

header('Location: ../../cidade.php');

?>