<?php
include '../../conexao.php';
include '../../verifica-logado.php';

$sql = "UPDATE tb_usuario_pedido SET data_confirmacao = NOW() WHERE id_usuario_pedido = $_GET[pedido];";
$resultado = mysqli_query($conexao, $sql);
