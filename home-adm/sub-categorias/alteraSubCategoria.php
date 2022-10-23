<?php

include '../../conexao.php';
$idSubCategoria = $_POST['idsubcategoria'];
$nomeSubCategoria = $_POST['nomeSubcategoria'];
$idcategoria = $_POST['idcategoria'];

$sql = "UPDATE tb_sub_categoria SET nome_sub_categoria='$nomeSubCategoria',fk_id_categoria=$idcategoria  WHERE id_sub_categoria =  $idSubCategoria";  
mysqli_query($conexao,$sql);

header('location:../categorias.php');

?>