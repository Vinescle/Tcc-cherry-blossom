<?php

include "../../conexao/conexao.php";

$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$tiktok = $_POST['tiktok'];
var_dump($_POST);
if(!empty($_FILES['banner']['name'])) $banner = $_FILES['banner'];

$Nomebanner = addslashes(md5($banner['tmp_name'])."-".$banner['name']);

$sql = "UPDATE `tb_adm_config` SET `email_sugestoes`='$email'
,`url_whatsapp`='$whatsapp',`url_instagram`='$instagram',`url_facebook`='$facebook'
,`url_twitter`='$twitter',`url_tiktok`='$tiktok ',`url_banner`='$Nomebanner' WHERE id_config = 1";

mysqli_query($conexao,$sql);

move_uploaded_file($banner['tmp_name'],"../../imagemBancoDeDados/banners/$Nomebanner");


?>