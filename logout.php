<?php
//Arquivo finalizador de sessão!!
session_start();//Puxando a sessão
session_destroy();//Finalizando todas as sessoes existentes!
header('Location: index.php');//Redirecioando
exit();