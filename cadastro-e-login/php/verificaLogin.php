<?php

include '../../novo/conexao.php';
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
    header("Location:./login.php"); // Corrigir se dar caca
}

$sql = "SELECT id_usuario ,email_usuario, senha_usuario, permissao_adm FROM tb_usuarios WHERE email_usuario = '$email' 
and senha_usuario = '$senha'";
$resultado = mysqli_query($conexao,$sql);
$linha = mysqli_fetch_array($resultado);


if($linha['permissao_adm'] == 2){
    $_SESSION['permissao'] = 2;
    header("location:$rota"."/index.php"); 
}else{
    $_SESSION['permissao'] = 1;
    $_SESSION['logado'] = 1;
    $_SESSION['id_cliente'] = $linha['id_usuario'];
    header("location:../../novo/index.php");
}

?>
