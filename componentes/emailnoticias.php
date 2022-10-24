<?php

include "../conexao.php";
$email = $_POST['email-noticias'];

$sql = "INSERT INTO tb_email_para_notificar (descricao_email) VALUES ('$email')";
mysqli_query($conexao, $sql);

header("Location: ../index.php");

?>