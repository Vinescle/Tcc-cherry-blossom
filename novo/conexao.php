<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'cherry_blossom');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die(header('location:../../httpExceptions/404NotFound.html'));

$rota = 'http://localhost/tcc/tcc-cherry-blossom/novo';
// alterar rota também no arquivo /assets/css/base-adm.css
