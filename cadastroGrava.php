<?php

include './conexao.php';

// include "../checagemSenha.php";

// session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirma = $_POST['senhaConfirma'];
$nascimento = $_POST['nascimento'];
$cpf = preg_replace('/[^0-9]/', '', $_POST['cpf']);
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

    $criptografia = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO tb_usuarios(email_usuario, senha_usuario, nome_usuario, dt_nascimento, cpf_usuario, fk_id_endereco, termos, receber_email, permissao_adm) 
    VALUES ('$email','$criptografia','$nome','$nascimento','$cpf',0,$Termos, $receberEmails, 0)";

    mysqli_query($conexao, $sql);
    $idUsuario = mysqli_insert_id($conexao);
    $_SESSION['logado'] = 1;
    $_SESSION['id_usuario'] = $idUsuario;
    $_SESSION['permissao'] = 0;
    header("location: $rota");
}

//Ainda está incompleto!!
