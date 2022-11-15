<?php

include '../../conexao.php';

if(count($_GET) == 0){
    echo "<script> alert('Nenhum item foi selecionado'); window.location.href='$rota/home-adm/categorias.php';</script>";
}

$idCategoria = $_GET['idCategoria'];
$i = 0;

while($i < count($idCategoria)){
    $sql = "DELETE FROM tb_categoria WHERE id_categoria = ".$idCategoria[$i];
    $sqlDeletesubcategoria = "DELETE FROM tb_sub_categoria where fk_id_Categoria = ".$idCategoria[$i]; 
    mysqli_query($conexao,$sql);
    mysqli_query($conexao,$sqlDeletesubcategoria);
    $i++;
}

header('location:../categorias.php');

?>