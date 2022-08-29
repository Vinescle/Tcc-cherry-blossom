<?php

define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','cherry_blossom');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die (header('location:../../httpExceptions/404NotFound.html'));

?>