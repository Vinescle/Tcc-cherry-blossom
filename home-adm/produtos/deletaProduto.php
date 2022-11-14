<?php

if (count($_GET) == 0){
    echo "<script> alert('Nenhum item foi selecionado'); window.location.href='../gerenciar.php';</script>";
}
include '../../conexao.php';

$idproduto = $_GET['idproduto'];
var_dump($idproduto);
$i = 0;

while($i < count($idproduto)){
    $sql = "DELETE FROM tb_produtos WHERE id_produtos = ".$idproduto[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:../gerenciar.php');

?>