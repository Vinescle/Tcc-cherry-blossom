<?php

include '../conexao/conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirma = $_POST['senhaConfirma'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$receberEmails = $_POST['receberEmails'];

if($receberEmails == "on"){
    $receberEmails = 1;
}else{
    $receberEmails = 0;
}

echo $receberEmails;
exit();

// if($senha != $senhaConfirma){
//     //Terminar a checagem de senha
//     // header('location:./cadastro.php');
// }

$sql = "INSERT INTO tb_usuarios(email_usuario, senha_usuario, nome_usuario, dt_nascimento, cpf_usuario, fk_id_endereco, permissao_adm, receber_email) 
VALUES ('$email','$senha','$nome','$nascimento','$cpf',0,1,$receberEmails)";

mysqli_query($conexao,$sql);
header('location:../home.php');

//Ainda está incompleto!!

?>