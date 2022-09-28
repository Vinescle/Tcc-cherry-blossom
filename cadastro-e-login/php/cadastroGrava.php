<?php

include '../../conexao/conexao.php';
// include "../checagemSenha.php";

session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirma = $_POST['senhaConfirma'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$receberEmails = $_POST['receberEmails'];
$Termos = $_POST['Termos'];


if ($receberEmails == "on") {
    $receberEmails = 1;
} else {
    $receberEmails = 0;
}

if ($Termos == "on") {
    $Termos = 1;
} else {
    $Termos = 0;
}

if ($senha != $senhaConfirma) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nascimento'] = $nascimento;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['receberEmails'] = $receberEmails;
    header('location:cadastro.php');
} else {

    $sql = "INSERT INTO tb_usuarios(email_usuario, senha_usuario, nome_usuario, dt_nascimento, cpf_usuario, fk_id_endereco, permissao_adm, receber_email) 
    VALUES ('$email','$senha','$nome','$nascimento','$cpf',0,$Termos,$receberEmails)";

    mysqli_query($conexao, $sql);
    $_SESSION['logado'] = 1;
    header('location:../../home.php');
}

//Ainda está incompleto!!
