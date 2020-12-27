<?php
//Pagina de painel contentendo informações dos usuario e botão sair
session_start();
include('verifica_login.php');
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>