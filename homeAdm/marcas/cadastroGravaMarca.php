<?php

include '../../conexao/conexao.php';
$nomeMarca = $_POST['nomeMarca'];
$corMarca = $_POST['corMarca'];
$iconUrl = [];
$iconUrl= $_FILES['iconUrl'];
var_dump($iconUrl);
$nomeIcone = addslashes(md5($iconUrl['tmp_name'])."-".$iconUrl['name']);

$sql = "INSERT INTO tb_marcas(nome_marca, icon_url,cor_marca) VALUES ('$nomeMarca','$corMarca','$nomeIcone')";

mysqli_query($conexao,$sql);

move_uploaded_file($iconUrl['tmp_name'],"../../imagemBancoDeDados/marcas/$nomeIcone");

?>