<?php
include '../../conexao.php';
include '../../verifica-logado.php';
$carregado = true;

if (!empty($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $key => $produto) {
        if ($_SESSION['carrinho'][$key]['produto'] == $_GET['id']) {
            unset($_SESSION['carrinho'][$key]);
        }
    }
}

// var_dump($_SESSION['carrinho']);

include "./index.php";
