<?php

include '../../conexao.php';

if(count($_GET) == 0){
    echo "<script> alert('Nenhum item foi selecionado'); window.location.href='$rota/home-adm/categorias.php';</script>";
}

$idCategoria = $_GET['idCategoria'];
$i = 0;

while($i < count($idCategoria)){
    $sql = "DELETE FROM tb_categoria WHERE id_categoria = ".$idCategoria[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:../categorias.php');

?>