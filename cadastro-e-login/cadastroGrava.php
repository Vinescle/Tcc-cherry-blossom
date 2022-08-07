<?php

include '../conexao/conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirma = $_POST['senhaConfirma'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO tb_usuarios(email_usuario, senha_usuario, nome_usuario, dt_nascimento, cpf_usuario, fk_id_endereco, permissao_adm, receber_email) 
VALUES ('$email','$senha','$nome','$nascimento','$cpf',1,1,1)";

mysqli_query($conexao,$sql);
header('location:../home.php');

//Ainda está incomplete!!

?>