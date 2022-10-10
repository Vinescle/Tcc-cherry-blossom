<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sobre Nós</title>

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/rodape-itens/sobre-nos.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
</head>

<body>

    <?php
    session_start();

    if (isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHomeLogado.php';
    } else if (!isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHome.php';
    }
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="div-titulo">
                <h1 class="titulo-pagina">CHERRY BLOSSOM</h1>
            </div>

            <div class="conteudo-texto">
                <p class="texto">A Cherry Blossom surgiu em 2020 durante a quarentena da COVID-19. O que antes era tédio, acabou se tornando arte através da pesquisa e experimentação de algumas formas de arte. Os resultados obtidos através dessas experiências eram vibrantes e traziam um sentimento de felicidade, era bom ver a ideia se tornando algo tocável.</p>

                <p class="texto">Cherry Blossom é uma loja de artesanatos focada em explorar diversos tipos de arte e levar essas experiências aos consumidores de todo o país através de um serviço de qualidade.</p>

                <p class="texto">Muito mais que artesanatos, a Cherry Blossom aborda temas através da arte, como a educação, a natureza, a cultura, o universo geek, dentre outros, e através desses temas, traz conhecimento e entretenimento.</p>

                <p class="texto">Oferecemos peças padronizadas e customizadas, todas feitas cuidadosamente, visando a qualidade e satisfação do cliente.</p>
            </div>

            <div class="conteudo-slogan">
                <img class="flor-imagem" src="../imagens/site/Logo_PNG_normal.png">

                <p class="texto-slogan">Cherry Blossom</p>

                <p class="texto-slogan">Transformando a vida em arte</p>
            </div>
        </div>
    </main>

    <?php
    include '../Componentes/rodapeHome.php';
    include '../Componentes/sugestaoProduto.php';
    ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>