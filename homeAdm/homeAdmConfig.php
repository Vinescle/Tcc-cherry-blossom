<?php

include '../conexao/conexao.php';

$sqlHomeAdmConfig = "SELECT * FROM tb_adm_config";
$resultadoConfigAdm = mysqli_query($conexao, $sqlHomeAdmConfig);
$configAdm = mysqli_fetch_array($resultadoConfigAdm);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry Blossom - Adm</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/menuAdm.css" rel="stylesheet">
    <link href="../css/homeAdm/homeAdmConfig.css" rel="stylesheet">

    <style>
        .icone-selecionado {
            background-color: #EC55D9;
            color: #FFFFFF;
        }

        /* Botão salvar */

        .input-salvar {
            margin: 1rem 0 2rem 0;

            display: flex;
            justify-content: center;
        }

        .input-salvar input[type="submit"] {
            cursor: pointer;
            position: absolute;

            opacity: 0;

            width: 131px;
            height: 26px;

            left: 0;
            top: 0;
        }

        .botao-salvar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            gap: 5px;

            position: relative;

            font-size: 16px;
            font-weight: 500;
            font-family: 'Inter';
            color: #FFF;

            width: 130px;
            height: 25px;

            background-color: #FF84F0;
            border: solid 2px #FF84F0;
            border-radius: 13px;

            overflow: hidden;
        }

        .botao-input{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .botao-banner{
            transition: 0.5s;
            opacity: 0.90;
        }

        .botao-banner:hover{
            opacity: 1;
        }
    </style>
</head>

<body>
    <?php
    include '../Componentes/cabecalhoHomeAdm.php';
    ?>
    <div style="display: flex;">
        <?php include '../Componentes/menuAdm.php'; ?>
    </div>

    <div class="conteudo-principal">
        <div class="main">
            <form style="width: 100%;" action="./admConfig/configAdmGrava.php" method="POST" enctype="multipart/form-data">
                <div class="form-configuracoes">
                    <div class="form-input">
                        <div>
                            <label class="input-texto">E-mail destinatário de sugestões</label>
                        </div>
                        <div>
                            <button class="botao-input" disabled>
                                <ion-icon class="icone-input" name="mail-outline"></ion-icon>
                            </button>
                            <input class="input-conjunto input-email" name="email" required value="<?php echo $configAdm['email_sugestoes'] ?>" type="text">
                        </div>
                    </div>

                    <div class="form-input">
                        <div>
                            <label class="input-texto">Senha Google</label>
                        </div>
                        <div>
                            <button class="botao-input" disabled>
                                <ion-icon class="icone-input" name="logo-google"></ion-icon>
                            </button>
                            <input class="input-conjunto input-whatsapp" name="senha" required value="<?php echo $configAdm['senha'] ?>" type="text"> 
                        </div>
                    </div>

                    <div class="form-input">
                        <div>
                            <label class="input-texto">URL Whatsapp</label>
                        </div>
                        <div>
                            <button class="botao-input" disabled>
                                <ion-icon class="icone-input" name="logo-whatsapp"></ion-icon>
                            </button>
                            <input class="input-conjunto input-whatsapp" name="whatsapp" required value="<?php echo $configAdm['url_whatsapp'] ?>" type="text"> 
                        </div>
                    </div>

                    <div class="form-input">
                        <div>
                            <label class="input-texto">URL Instagram</label>
                        </div>
                        <div>
                            <button class="botao-input" disabled>
                                <ion-icon class="icone-input" name="logo-instagram"></ion-icon>
                            </button>
                            <input class="input-conjunto input-instagram" name="instagram" required value="<?php echo $configAdm['url_instagram'] ?>" type="text">
                        </div>
                    </div>

                    <div class="form-input">
                        <div>
                            <label class="input-texto">URL Facebook</label>
                        </div>
                        <div>
                            <button class="botao-input" disabled>
                                <ion-icon class="icone-input" name="logo-facebook"></ion-icon>
                            </button>
                            <input class="input-conjunto input-facebook" name="facebook" required value="<?php echo $configAdm['url_facebook'] ?>" type="text">
                        </div>
                    </div>

                    <div class="form-input">
                        <div>
                            <label class="input-texto">URL Twitter</label>
                        </div>
                        <div>
                            <button class="botao-input" disabled>
                                <ion-icon class="icone-input" name="logo-twitter"></ion-icon>
                            </button>
                            <input class="input-conjunto input-twitter" name="twitter" required value="<?php echo $configAdm['url_twitter'] ?>" type="text">
                        </div>
                    </div>

                    <div class="form-input">
                        <div>
                            <label class="input-texto">URL TikTok</label>
                        </div>
                        <div>
                            <button class="botao-input" disabled>
                                <ion-icon class="icone-input" name="logo-tiktok"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" name="tiktok" required value="<?php echo $configAdm['url_tiktok'] ?>" type="text">
                        </div>
                    </div>

                    <div class="form-banner">
                        <div>
                            <label class="input-texto">Banner</label>
                        </div>
                        <div class="input-banner">
                            <button type="button" class="botao-banner" style="background-image: url(../imagemBancoDeDados/banners/<?php echo $configAdm['url_banner'] ?>);">
                                <ion-icon class="icone-botao" name="download-outline"></ion-icon>
                                Clique para fazer upload de imagens
                                <input type="file" name="banner" required value="../imagemBancoDeDados/banners/<?php echo $configAdm['url_banner']?>">
                            </button>
                        </div>
                    </div>

                    <div class="input-salvar">
                        <button class="botao-salvar">
                            <input class="botao-salvo" type="submit" value="Salvar">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <input type="text" value="5" id="pagina-verificacao" style="display:none;">

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>