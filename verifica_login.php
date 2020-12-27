<?php
//Verificação de sessão
//session_start(); <- Código apresentou, mas omitindo essa linha funcionou!!
if(!$_SESSION['usuario']){
    header('Location: index.php');
    exit();
}