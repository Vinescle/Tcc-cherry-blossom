<?php

include '../../conexao.php';

$email_usuario = $_POST['email_usuario'];
$senhaAtual = $_POST['senhaAtual'];
$novaSenha = password_hash($novaSenha = $_POST['novaSenha'], PASSWORD_DEFAULT);

$sql = "SELECT id_usuario, senha_usuario FROM tb_usuarios WHERE email_usuario = '$email_usuario'";
$resultadoSenhaAtual = mysqli_query($conexao ,$sql);
$resultado = mysqli_fetch_array($resultadoSenhaAtual);

if(password_verify($senhaAtual, $resultado['senha_usuario'])){
    $id = $resultado['id_usuario'];
    $sqlNovaSenha = "UPDATE tb_usuarios SET senha_usuario='$novaSenha' WHERE id_usuario = $id";
    mysqli_query($conexao ,$sqlNovaSenha);
    header('location:../index.php?senhaNova=1');
}else{
    header('location:../index.php?senhaNova=0');
}

?>