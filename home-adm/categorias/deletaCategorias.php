<?php

include '../../conexao.php';

var_dump($_GET);

$idCategoria = $_GET['idCategoria'];
$i = 0;

while($i < count($idCategoria)){
    $sql = "DELETE FROM tb_categoria WHERE id_categoria = ".$idCategoria[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:../categorias.php');

?>