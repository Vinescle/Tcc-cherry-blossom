<?php

include '../../conexao.php';

if(count($_GET) == 0){
    echo "<script> alert('Nenhum item foi selecionado'); window.location.href='$rota/home-adm/categorias.php';</script>";
}

$idSubCategoria = $_GET['idSubCategoria'];
$i = 0;

while($i < count($idSubCategoria)){
    $sql = "DELETE FROM tb_sub_categoria WHERE id_sub_categoria = ".$idSubCategoria[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:../categorias.php');

?>