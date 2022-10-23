<?php

include '../../conexao.php';
session_start();

$id = $_SESSION['id_usuario'];
$fk_id_endereco = $_POST['fk_id_endereco'];
$nomeRecebedor = $_POST['nomeRecebedor'];
$CEP = $_POST['CEP'];
$estado = $_POST['idestado'];
$cidade = $_POST['idcidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];


if($fk_id_endereco == 0){
    $sql = "INSERT INTO `tb_endereco`(`cidade`, `estado`, `bairro`, `rua`, `cep`, `fk_id_usuario`, `numero`, `nm_recebedor`, `complemento`) VALUES ('$cidade','$estado','$bairro','$rua','$CEP','$id', $numero, '$nomeRecebedor', '$complemento')";
    mysqli_query($conexao, $sql);
    $ultimoEndereco = mysqli_insert_id($conexao);
    $sqlUsuario = "UPDATE `tb_usuarios` SET `fk_id_endereco`='$ultimoEndereco' WHERE id_usuario = $id";
    mysqli_query($conexao, $sqlUsuario);
}else{
    $sql = "UPDATE `tb_endereco` SET `cidade`='$cidade',`estado`='$estado',`bairro`='$bairro',`rua`='$rua',`cep`='$CEP',`nm_recebedor`= '$nomeRecebedor',`numero`= $numero,`complemento`= '$complemento' WHERE id_endereco = $fk_id_endereco";
    mysqli_query($conexao, $sql);
}

header("location:../index.php");

?>