<?php
include '../conexao.php';

//receber dados do front-end
$nome = $_REQUEST['nome'];
$cep = $_REQUEST['cep'];
$estado = $_REQUEST['estado'];
$id_regiao_fk = $_REQUEST['regiao'];

$sql2 = "SELECT * FROM cidade WHERE nome = '$nome'";
$resultado2 = mysqli_query($conexao, $sql2);

if(mysqli_num_rows($resultado2) > 0){
    session_start();
    $_SESSION['mensagem'] = "Cidade já cadastrada!";
}else{
    
    $sql = "INSERT INTO cidade (nome, cep, estado, id_regiao_fk)
     VALUES ('$nome', '$cep', '$estado', '$id_regiao_fk')";
    // Executa o sql
    $resultado = mysqli_query($conexao, $sql);
    session_start();
    $_SESSION['mensagem'] = "$nome Cadastrado com Sucesso!";
}

    //mandar para a página principal
    header('Location: ../../cidade.php');
    ?>





