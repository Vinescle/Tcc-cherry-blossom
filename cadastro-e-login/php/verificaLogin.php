<?php

include '../../conexao/conexao.php';
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
    header("Location:./login.php");exit(); // Corrigir se dar caca
}

$sql = "SELECT email_usuario, senha_usuario, permissao_adm FROM tb_usuarios WHERE email_usuario = '$email' 
and senha_usuario = '$senha'";
$resultado = mysqli_query($conexao, $sql) or die('Não foi possível estabelecer a conexão com o servidor!');
// header("location:../../home.php");

session_start();

if($resultado == true){
    while($linha = mysqli_fetch_array($resultado)){
        $permissao_adm = $linha['permissao_adm'];

    }
    if($linha['permissao_Adm'] == 2){
        header("location:../../homeAdm/homeAdm.php"); 
    }else{
        header("location:../../home.php");
        $_SESSION['logado'] = 1;
    }
}


?>