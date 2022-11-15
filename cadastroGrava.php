<?php

include './conexao.php';

// include "../checagemSenha.php";

// session_start();

$erroEmail = false;
$erro = false;
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirma = $_POST['senhaConfirma'];
$nascimento = $_POST['nascimento'];
$cpf = preg_replace('/[^0-9]/', '', $_POST['cpf']);
$receberEmails = $_POST['receberEmails'];
$Termos = $_POST['Termos'];

if (strlen($cpf) < 10) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['senhaConfirma'] = $senhaConfirma;
    $_SESSION['nascimento'] = $nascimento;
    $_SESSION['cpf'] = $_POST['cpf'];
    $_SESSION['receberEmails'] = $receberEmails;
    header('location: ./cadastro.php?cpfIncorreto=1');
    exit();
}


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
    $erro = true;
}

$criptografia = password_hash($senha, PASSWORD_DEFAULT);
$sql = "INSERT INTO tb_usuarios(email_usuario, senha_usuario, nome_usuario, dt_nascimento, cpf_usuario, fk_id_endereco, termos, receber_email, permissao_adm) 
    VALUES ('$email','$criptografia','$nome','$nascimento','$cpf',0,$Termos, $receberEmails, 0)";

try {
    mysqli_query($conexao, $sql);
    die();
    $idUsuario = mysqli_insert_id($conexao);
    $_SESSION['logado'] = 1;
    $_SESSION['id_usuario'] = $idUsuario;
    $_SESSION['permissao'] = 0;
    header("location: $rota");
} catch (Exception $e) {
    var_dump($e);
    die();
    if (str_starts_with($e->getMessage(), "Duplicate entry")) {
        $erroEmail = true;
    }
}
if ($erroEmail == true && $erro == false) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nascimento'] = $nascimento;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['receberEmails'] = $receberEmails;
    header('location: ./cadastro.php?emailDuplicado=1');
} else if ($erroEmail == false && $erro == true) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nascimento'] = $nascimento;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['receberEmails'] = $receberEmails;
    header('location: ./cadastro.php?senhaIncorreta=1');
} else if ($erroEmail == true && $erro == true) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nascimento'] = $nascimento;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['receberEmails'] = $receberEmails;
    header('location: ./cadastro.php?emailDuplicado=1&senhaIncorreta=1');
}
