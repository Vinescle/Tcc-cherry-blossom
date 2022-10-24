<?php

//SQL PARA DESCOBRIR O EMAIL
include './conexao.php';
$sqlHomeAdmConfig = "SELECT * FROM ";
$resultadoConfigAdm = mysqli_query($conexao, $sqlHomeAdmConfig);
$configAdm = mysqli_fetch_array($resultadoConfigAdm);

// NOT FOUND RESOLVIDO UHUHUHUHUHUHU

require_once('vendor/PHPMailer/PHPMailer.php');
require_once('vendor/PHPMailer/SMTP.php');
require_once('vendor/PHPMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$conteudoSugestao = $_POST['sugestaoProduto'];

$mail = new PHPMailer(true);

try {
    // Essa parte está pronta, só precisamos do email que irá gerar as mensagens!!!
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $configAdm['email_sugestoes']; //Insira o email de testes 
    $mail->Password = $configAdm['senha']; //Insira sua senha de testes 
    $mail->Port = 587;

    //EMAIL - FROM
    $mail->setFrom($configAdm['email_sugestoes']);
    $mail->addAddress($configAdm['email_sugestoes']);

    $mail->isHTML(true);
    $mail->Subject = 'Sugestao de produtos para a loja - Cherry Blossom';
    $mail->Body = 'Olá, gostaria que na loja tivesse o produto: ' . $conteudoSugestao;
    $mail->AltBody = 'Chegou o email de sugestão de produto';

    header("location: $rota");

    if ($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Erro ao enviar o email:{$mail->ErrorInfo}';
    }
} catch (Exception $e) {
    echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
}