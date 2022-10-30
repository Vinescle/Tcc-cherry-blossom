<?php
include '../conexao.php';

$sql = "UPDATE tb_produtos SET id_stripe = $_GET[session_id] WHERE id_stripe = $_GET[id_pedido]";

header("Location: $rota/perfil/historico.php");
