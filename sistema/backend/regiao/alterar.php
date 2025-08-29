<?php
    include '../conexao.php';

    //receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];


$sql = "UPDATE regiao SET nome='$nome' WHERE id='$id' ";
//Executar o sql
mysqli_query($conexao, $sql);
//mandar para a página principal

session_start();
$_SESSION['mensagem'] = "Alterado com Sucesso!";

header('Location: ../../regiao.php');

?>