<?php

include '../../conexao/conexao.php';
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT email_usuario, senha_usuario, permissao_adm FROM tb_usuarios WHERE email_usuario = '$email' 
and senha_usuario = '$senha'";
$resultado = mysqli_query($conexao, $sql) or die('Não foi possível estabelecer a conexão com o servidor!');
// header("location:../../home.php");

if($resultado == true){
    while($linha = mysqli_fetch_array($resultado)){
        $permissao_adm = $linha['permissao_adm'];

    }
    if($permissao_adm == 1){
        header("location:../../home.php");
    }else{
        header("location:../../home.php"); 
    }
}


?>