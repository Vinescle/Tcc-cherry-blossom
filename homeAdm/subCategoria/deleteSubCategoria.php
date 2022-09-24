<?php

include '../../conexao/conexao.php';
$id = 1;
$sql = "DELETE FROM `tb_sub_categoria` WHERE id_sub_categoria = $id";
mysqli_query($conexao,$sql);

?>