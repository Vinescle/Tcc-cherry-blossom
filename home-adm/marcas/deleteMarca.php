<?php

include '../../conexao.php';

$idMarca = $_GET['idcheckbox'];
$i = 0;

while($i < count($idMarca)){
    $sql = "DELETE FROM tb_marcas WHERE id_marca = ".$idMarca[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:../marcas.php');

?>