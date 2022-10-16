<?php

include '../../conexao.php';

$senhaAtual = $_POST['senhaAtual'];
$novaSenha = $_POST['novaSenha'];

$sqlSenhaAtual = "SELECT id_usuario, senha_usuario FROM tb_usuarios WHERE senha_usuario = $senhaAtual";
$resultadoSenhaAtual = mysqli_query($conexao ,$sqlSenhaAtual);
$resultado = mysqli_fetch_array($resultadoSenhaAtual);


if($resultado != NULL){
    $id = $resultado['id_usuario'];
    $sqlNovaSenha = "UPDATE tb_usuarios SET senha_usuario='$novaSenha' WHERE id_usuario = $id";
    mysqli_query($conexao ,$sqlNovaSenha);
    header('location:../index.php?senhaNova=1');
}else{
    header('location:../index.php?senhaNova=0');
}

?>