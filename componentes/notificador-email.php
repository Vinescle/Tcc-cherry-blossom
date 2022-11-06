<?php

//SQL PARA DESCOBRIR O EMAIL
include '../conexao.php';
$sqlHomeAdmConfig = "SELECT * FROM tb_adm_config";
$resultadoConfigAdm = mysqli_query($conexao, $sqlHomeAdmConfig);
$configAdm = mysqli_fetch_array($resultadoConfigAdm);

// NOT FOUND RESOLVIDO UHUHUHUHUHUHU

require_once('../vendor/PHPMailer/PHPMailer.php');
require_once('../vendor/PHPMailer/SMTP.php');
require_once('../vendor/PHPMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nomeProduto = $_GET['nomeProduto'];
$sql = "SELECT * FROM tb_usuarios WHERE receber_email = 1";
$resultado = mysqli_query($conexao, $sql);


$mail = new PHPMailer(true);


// Essa parte está pronta, só precisamos do email que irá gerar as mensagens!!!
while ($resultadoEmail = mysqli_fetch_array($resultado)) {
    try {
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $configAdm['email_sugestoes']; //Insira o email de testes 
        $mail->Password = $configAdm['senha']; //Insira sua senha de testes 
        $mail->Port = 587;

        //EMAIL - FROM
        $mail->setFrom($resultadoEmail['email_usuario']);
        $mail->addAddress($resultadoEmail['email_usuario']);
        $mail->isHTML(true);
        $mail->Subject = 'Um novo produto novo novo mega novo - Cherry Blossom';
        $mail->Body = 'venha ver o novo produto novo novo: ' . $nomeProduto;
        $mail->AltBody = 'produto';

        if ($mail->send()) {
            // echo 'Email enviado com sucesso';
        } else {
            // echo "Erro ao enviar o email:{$mail->ErrorInfo}";
        }
    } catch (Exception $e) {
        echo "<br>";
        echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
        var_dump($e);
        var_dump($e);
        echo "<br>";
    }
}


header("location: $rota");
