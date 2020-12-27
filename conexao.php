<?php

define("HOST", '1277.0.0.1');
define("USUARIO", 'root');
define("SENHA",'micael');
define('DB','login');

$conexao = mysqli_conect(HOST,USUARIO,SENHA,DB) or die ("Não foi possivel conectar");