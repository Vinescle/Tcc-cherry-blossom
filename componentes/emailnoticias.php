<?php

include "../conexao.php";
$email = $_POST['email-noticias'];

$sql = "INSERT INTO tb_email_para_notificar (descricao_email,data_cadastro) VALUES ('$email',NOW())";
mysqli_query($conexao, $sql);
$ultimoId = mysqli_insert_id($conexao);
$sqlUltimo = "SELECT DATE_FORMAT(data_cadastro,'%m') FROM tb_email_para_notificar WHERE id_email = $ultimoId";
$resultadoUltimoId = mysqli_query($conexao, $sqlUltimo);
$resultadoUltimoId = mysqli_fetch_array($resultadoUltimoId);
$fk_id_mes = $resultadoUltimoId[0];
$sqlUltimo = "UPDATE tb_email_para_notificar SET fk_id_mes = $fk_id_mes WHERE id_email = $ultimoId";
mysqli_query($conexao, $sqlUltimo);

header("Location: ../index.php");

?>