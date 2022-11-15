<?php

include '../../conexao.php';
session_start();
$id = $_SESSION['id_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$cpf_usuario = preg_replace('/[^0-9]/', '', $_POST['cpf_usuario']);
$telefone_usuario = $_POST['telefone_usuario'];

if ($nome_usuario == null || $email_usuario == null || $cpf_usuario == null || $telefone_usuario == null) {
    header('location:../index.php');
    exit();
}

$sqlDados = "UPDATE tb_usuarios SET email_usuario='$email_usuario',
nome_usuario ='$nome_usuario',cpf_usuario='$cpf_usuario', telefone='$telefone_usuario' WHERE id_usuario = $id";
mysqli_query($conexao, $sqlDados);

header('location:../index.php');
