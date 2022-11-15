<?php
include '../conexao.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/rodape.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/rodape-sobre/sobre-nos.css" rel="stylesheet">

    <title>Cherry Blossom - Home</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabecalho.php');
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="div-titulo">
                <h1 class="titulo-pagina">CHERRY BLOSSOM</h1>
            </div>

            <div class="conteudo-texto">
                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;A Cherry Blossom surgiu em 2020 durante a quarentena da COVID-19. O que antes era tédio, acabou se tornando arte através da pesquisa e experimentação de algumas formas de arte. Os resultados obtidos através dessas experiências eram vibrantes e traziam um sentimento de felicidade, era bom ver a ideia se tornando algo tocável.</p>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Cherry Blossom é uma loja de artesanatos focada em explorar diversos tipos de arte e levar essas experiências aos consumidores de todo o país através de um serviço de qualidade.</p>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Muito mais que artesanatos, a Cherry Blossom aborda temas através da arte, como a educação, a natureza, a cultura, o universo geek, dentre outros, e através desses temas, traz conhecimento e entretenimento.</p>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Oferecemos peças padronizadas e customizadas, todas feitas cuidadosamente, visando a qualidade e satisfação do cliente.</p>
            </div>

            <div class="conteudo-slogan">
                <img class="flor-imagem" src="<?php echo $rota; ?>/assets/imagens/logo.png">

                <p class="texto-slogan">Cherry Blossom</p>

                <p class="texto-slogan">Transformando a vida em arte</p>
            </div>
        </div>
    </main>

    <?php
    include('../componentes/rodape.php');
    ?>

    <?php
    include('../imports.php');
    ?>
</body>

</html>