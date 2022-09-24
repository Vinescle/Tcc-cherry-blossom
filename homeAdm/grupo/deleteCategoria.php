<?php

include '../../conexao/conexao.php';
$id = 2; //Fazer o post quando a tabela estar completa :)
$sql = "DELETE FROM `tb_categoria` WHERE $id";
mysqli_query($conexao,$sql);

?>