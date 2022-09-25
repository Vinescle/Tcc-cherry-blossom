<?php

include '../../conexao/conexao.php';
$idSubCategoria = $_POST['id_sub_categoria'];
$fkIdCategoria = $_POST['fk_id_categoria'];
$nomeSubCategoria = $_POST['nome_sub_categoria'];

$sql = "UPDATE tb_sub_categoria SET nome_sub_categoria = '$nomeSubCategoria' ,fk_id_categoria = $fkIdCategoria WHERE id_sub_categoria = $idSubCategoria";
mysqli_query($conexao,$sql);

?>