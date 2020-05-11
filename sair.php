<?php 
    session_start();
    unset( $_SESSION['id'], $_SESSION['nome'],$_SESSION['email']);
    $_SESSION['msg'] = "Deslogado com Sucesso";
    header("Location: index.php");


?>