<?php
include '../conexao.php';

$id = $_REQUEST['id'];



$sql = "DELETE FROM ponto_focal WHERE id = '$id' ";
$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "Excluído com sucesso!"; 

// Redirecionar para a página principal após a exclusão
header('Location:../../ponto_focal.php');
?>