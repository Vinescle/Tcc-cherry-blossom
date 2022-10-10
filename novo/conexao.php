<?php

// define('HOST', 'localhost');
// define('USUARIO', 'root');
// define('SENHA', '');
// define('DB', 'cherry_blossom');

define('HOST', 'mysql');
define('USUARIO', 'root');
define('SENHA', '123.456');
define('DB', 'ist');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die(header('location:../../httpExceptions/404NotFound.html'));

$rota = 'http://localhost/tcc-cherry-blossom';
$rotaAntigaAntigaTeste = 'http://localhost/tcc/tcc-cherry-blossom/novo';
$rota = 'http://localhost/novo';
// alterar rota também no arquivo /assets/css/base-adm.css
