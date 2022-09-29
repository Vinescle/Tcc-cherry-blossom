<?php

include '../../conexao/conexao.php';
$nomeCategoria = $_POST['nomeCategoria'];

$sql = "INSERT INTO tb_categoria(nome_categoria) VALUES ('$nomeCategoria')";
mysqli_query($conexao,$sql);

header("location:./formCadastroCategoria.php");

?>