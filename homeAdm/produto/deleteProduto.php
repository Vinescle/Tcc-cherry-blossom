<?php

include '../../conexao/conexao.php';

$id = 1; //Quando tiver a tabela o id vai vir por á :) 


$sql = "DELETE FROM `tb_produtos` WHERE $id";
mysqli_query($conexao,$sql);

?>