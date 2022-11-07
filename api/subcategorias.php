<?php
include '../conexao.php';
include '../verifica-logado.php';

$sql = "SELECT * FROM tb_sub_categoria WHERE fk_id_categoria = $_GET[categoria]";
$resultado = mysqli_query($conexao, $sql);

echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));
