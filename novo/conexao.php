<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'cherry_blossom');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die(header('location:../../httpExceptions/404NotFound.html'));

$rotaAntigaTeste = 'http://localhost/tcc-cherry-blossom';
$rota = 'http://localhost/tcc-cherry-blossom/novo';
// alterar rota também no arquivo /assets/css/base-adm.css
