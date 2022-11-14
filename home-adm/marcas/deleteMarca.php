<?php

include '../../conexao.php';

if(count($_GET) == 0){
    echo "<script> alert('Nenhum item foi selecionado'); window.location.href='$rota/home-adm/marcas.php';</script>";
}

$idMarca = $_GET['idcheckbox'];
$i = 0;

while($i < count($idMarca)){
    $sql = "DELETE FROM tb_marcas WHERE id_marca = ".$idMarca[$i];
    mysqli_query($conexao,$sql);
    $i++;
}

header('location:../marcas.php');

?>