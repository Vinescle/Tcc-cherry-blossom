<?php

include './conexao.php';



$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($_POST) and (empty($_POST['email']) or empty($_POST['senha']))) {
    header("Location:./login.php"); // Corrigir se dar caca
}

$sql = "SELECT id_usuario ,email_usuario, senha_usuario, permissao_adm FROM tb_usuarios WHERE email_usuario = '$email' LIMIT 1";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado);
$senhaCriptografia = $linha['senha_usuario'];
if (password_verify($senha, $senhaCriptografia)) {

    // if($linha){
    session_start();
    $_SESSION['permissao'] = $linha['permissao_adm'];
    $_SESSION['logado'] = 1;
    $_SESSION['id_usuario'] = $linha['id_usuario'];
    header("location: $rota");
} else {
    header('location:login.php');
}
