<?php
$page = 'configuracoes';
include '../conexao.php';
include '../verifica-logado.php';

$sqlHomeAdmConfig = "SELECT * FROM tb_adm_config";
$resultadoConfigAdm = mysqli_query($conexao, $sqlHomeAdmConfig);
$configAdm = mysqli_fetch_array($resultadoConfigAdm);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-lateral.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/configuracoes.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabecalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <form class="formulario" action="./admConfig/configAdmGrava.php" method="POST" enctype="multipart/form-data">
                    <div class="w-100">
                        <label class="input-texto">E-mail destinatário de sugestões</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="mail-outline"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" type="email" name="email" required value="<?php echo $configAdm['email_sugestoes'] ?>">
                        </div>
                    </div>
                    <div class="w-100">
                        <label class="input-texto">Senha Google</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="logo-google"></ion-icon>
                            </button>
                            <input id="senha" class="input-conjunto input-tiktok input-senha-google" type="password" name="senha" required value="<?php echo $configAdm['senha'] ?>">
                            <div class="icon-input-final" style="cursor:pointer;">
                                <ion-icon id="senhaIcon" class="icon-eyes" name="eye-off-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <label class="input-texto">URL Whatsapp</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="logo-whatsapp"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" type="text" name="whatsapp" required value="<?php echo $configAdm['url_whatsapp'] ?>">
                        </div>
                    </div>
                    <div class="w-100">
                        <label class="input-texto">URL Instagram</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="logo-instagram"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" type="text" name="instagram" required value="<?php echo $configAdm['url_instagram'] ?>">
                        </div>
                    </div>
                    <div class="w-100">
                        <label class="input-texto">URL Facebook</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="logo-facebook"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" type="text" name="facebook" required value="<?php echo $configAdm['url_facebook'] ?>">
                        </div>
                    </div>
                    <div class="w-100">
                        <label class="input-texto">URL Twitter</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="logo-twitter"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" type="text" name="twitter" required value="<?php echo $configAdm['url_twitter'] ?>">
                        </div>
                    </div>
                    <div class="w-100">
                        <label class="input-texto">URL Tiktok</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="logo-tiktok"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" type="text" name="tiktok" required value="<?php echo $configAdm['url_tiktok'] ?>">
                        </div>
                    </div>
                    <div class="form-banner">
                        <div>
                            <label class="input-texto">Banner</label>
                        </div>
                        <div class="input-banner" style="overflow:hidden; border-radius:20px;">
                            <button type="button" class="botao-banner" style="background-image: url(<?php echo $rota; ?>/assets/imagens/storage/banners/<?php echo $configAdm['url_banner'] ?>);">
                                <?php
                                if (isset($configAdm['url_banner']) and !empty($configAdm['url_banner'])) {
                                    $imagemBanner = $configAdm['url_banner'];
                                ?>
                                    <img id="output" src="../assets/imagens/storage/banner/<?php echo $imagemBanner ?>" width="120%" height="120%" alt="Banner página">
                                <?php
                                } else {
                                ?>
                                    <ion-icon class="icone-botao input-icone_botao" name="download-outline"></ion-icon>
                                    Clique para fazer upload de imagens
                                <?php
                                }
                                ?>
                                <input type="file" name="banner" required value="<?php echo $rota; ?>/assets/imagens/storage/banners/<?php echo $configAdm['url_banner'] ?>" onchange="previewImagem(event)">

                                <div class="botao-lixeira">
                                    <img class="icone-lixeira" src="../assets/icones/lixeira.svg">
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="input-salvar">
                        <button type="submit" class="botao-texto min-width-botao centralizar margem-topo">
                            Salvar
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <script src="<?php echo $rota; ?>/assets/js/senhaIcon.js"></script>
    <script>
        const input_icone_botao = document.querySelector('.input-icone_botao');

        function previewImagem(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src)
            }
        };
    </script>
    <?php
    include('../imports.php');
    ?>
</body>

</html>