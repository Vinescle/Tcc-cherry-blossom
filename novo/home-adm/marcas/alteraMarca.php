<?php
include '../../conexao.php';
$id = 15;
$nomeMarca = $_POST['nomeMarca'];
$corMarca = $_POST['corMarca'];
if (!empty($_FILES['iconUrl']['name'])) $iconUrl = $_FILES['iconUrl'];


if (!empty($iconUrl)) {

    $nomeIcone = addslashes(md5($iconUrl['tmp_name']) . "-" . $iconUrl['name']);
    // var_dump($iconUrl);
    $sql = "UPDATE `tb_marcas` SET `nome_marca`='$nomeMarca',`icon_url`='$nomeIcone',`cor_marca`='$corMarca' WHERE id_marca = $id";

    mysqli_query($conexao, $sql);

    move_uploaded_file($iconUrl['tmp_name'], "../../assets/imagens/storage/marcas/$nomeIcone");

    $sqlMarcas = "SELECT * FROM tb_marcas WHERE id_marca = $id";
    $resultadoSelectMarcas = mysqli_query($conexao, $sqlMarcas);
    $resultadoSelectMarcas = mysqli_fetch_array($resultadoSelectMarcas);
    unlink("../../assets/imagens/storage/marcas" . $resultadoSelectMarcas['icon_url']);

    // $sqlDeleteIcon = "DELETE FROM tb_marcas WHERE id_marca = $id";
    // $resultadoDeleteIcon = mysqli_query($conexao, $sqlDeleteIcon);
    // mysqli_query($conexao,$sqlDeleteIcon);

}


header('location:../marcas.php');
