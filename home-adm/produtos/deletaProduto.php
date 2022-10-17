<?php

include '../../conexao.php';

$idproduto = $_GET['idproduto'];
var_dump($idproduto);
$i = 0;

while($i < count($idproduto)){
    $sql = "DELETE FROM tb_produtos WHERE id_produtos = ".$idproduto[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:./');

?>