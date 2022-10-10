<?php

include '../../conexao/conexao.php';
$idCategoria = $_POST['idCategoria'];
$nomeCategoria = $_POST['nomeCategoria'];

$sql = "UPDATE tb_categoria SET nome_categoria='$nomeCategoria' WHERE id_categoria = $idCategoria";
mysqli_query($conexao,$sql);

?>