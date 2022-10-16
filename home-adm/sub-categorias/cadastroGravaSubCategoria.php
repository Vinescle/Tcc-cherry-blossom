<?php

include '../../conexao.php';
$id_categoria = $_POST['idcategoria'];
$nomeSubCategoria = $_POST['subcategoria'];

$sql = "INSERT INTO tb_sub_categoria(nome_sub_categoria, fk_id_categoria) VALUES ('$nomeSubCategoria',$id_categoria)";
mysqli_query($conexao, $sql);

header("location:../categorias.php");
