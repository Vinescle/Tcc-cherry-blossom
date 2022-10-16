<?php
include '../../conexao.php';
include '../../verifica-logado.php';
$nomeMarca = $_POST['nomeMarca'];
$corMarca = $_POST['corMarca'];
//$iconUrl = [];
$iconUrl = $_FILES['iconUrl'];
$nomeIcone = addslashes(md5($iconUrl['tmp_name']) . "-" . $iconUrl['name']);

$sql = "INSERT INTO tb_marcas(nome_marca, icon_url,cor_marca) VALUES ('$nomeMarca','$nomeIcone','$corMarca')";

mysqli_query($conexao, $sql);

move_uploaded_file($iconUrl['tmp_name'], "../../assets/imagens/storage/marcas/$nomeIcone");

header('location:../marcas.php');
