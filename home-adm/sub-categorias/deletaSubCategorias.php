<?php

include '../../conexao.php';

$idSubCategoria = $_GET['idSubCategoria'];
$i = 0;

while($i < count($idSubCategoria)){
    $sql = "DELETE FROM tb_sub_categoria WHERE id_sub_categoria = ".$idSubCategoria[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:../categorias.php');

?>