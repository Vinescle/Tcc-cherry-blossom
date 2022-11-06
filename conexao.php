<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'cherry_blossom');

// define('HOST', 'mysql');
// define('USUARIO', 'root');
// define('SENHA', '123.456');
// define('DB', 'ist');

// $rota = 'http://localhost/tcc-cherry-blossom';
$rota = 'http://localhost/Tcc-cherry-blossom-master';
// $rota = 'http://localhost';
// alterar rota também no arquivo /assets/css/base-adm.css e /assets/css/base.css

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die(header("location: $rota/404NotFound.html"));

session_start();
