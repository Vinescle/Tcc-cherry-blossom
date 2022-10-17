<?php
include '../../conexao.php';
include '../../verifica-logado.php';

if (!empty($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $key => $produto) {
        if ($_SESSION['carrinho'][$key]['produto'] == $_GET['id']) {
            $_SESSION['carrinho'][$key]['quantidade']++;
        }
    }
}

// var_dump($_SESSION['carrinho']);

include "./index.php";
