<?php

    session_start();
    //destruir a sessão
    session_destroy();

    //limpar as variáveis de sessão
    unset($_SESSION['senha']);
    unset($_SESSION['cpf']);

    //redirecionar para o login
    header('location:../index.php');
?>