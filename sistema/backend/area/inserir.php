<?php
include '../conexao.php';

//receber dados do front-end
$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$numero = $_REQUEST['numero'];

$sql = "INSERT INTO area (id, nome, numero)
        VALUES ('$id', '$nome', '$numero')";
//executa sql
$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "$nome cadastrado com Successo!";

//mandar para pagina principal
header('Location:../../area.php');
?>