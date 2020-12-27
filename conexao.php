<?php
//Arquivo de estabelecimento de conexão com o Banco de Dados MySQL
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA','');
define('DB','login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possivel conectar");