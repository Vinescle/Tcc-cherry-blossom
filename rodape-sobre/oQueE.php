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

    <link href="<?php echo $rota; ?>/assets/css/rodape-sobre/oQueE.css" rel="stylesheet">

    <title>Cherry Blossom</title>
</head>

<body>
    <div id="papercraft"></div>

    <?php
    include('../componentes/menu-cabecalho.php');
    ?>
    <main>
        <div class="conteudo-principal">
            <div class="div-papercraft">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É PAPERCRAFT?</h4>
                </div>

                <img class="imagens" src="../assets/imagens/site/papercraft.png">
                <div id="hamabead"></div>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Papercraft é um método de construir objetos tridimensionais utilizando papel, uma arte parecida com o origami, mas se diferencia por utilizar dobraduras, cortes, colagem, moldagem e até mesmo criação de camadas. Apesar de parecerem frágeis por serem de papel, as peças são feitas com papéis mais grossos e possuem um acabamento em verniz e goma laca, os tornando mais resistentes.</p>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Qualquer coisa pode se transformar em um papercraft, tendo diferentes tamanhos e servindo para diversas finalidades.</p>
            </div>

            <div class="div-hamaBeads">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É HAMA BEADS?</h4>
                </div>

                <img class="imagens" src="../assets/imagens/site/hama-beads.png">
                <div id="macrame"></div>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Hama beads são objetos feitos utilizando pequenas peças plásticas unidas, podendo-se criar qualquer coisa em um estilo pixel art. Com eles, podem ser criados diversos objetos, como acessórios, decorações, porta-copos, chaveiros e quadros.</p>
            </div>

            <div class="div-macrame">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É MACRAMÊ?</h4>
                </div>

                <img class="imagens" src="../assets/imagens/site/macrame.png">
                <div id="miçanga"></div>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;O macramê é uma técnica de tecelagem manual que utiliza nós para criar diferentes tipos de peças. Vários tipos de fios são usados, dando origem a diferentes itens, desde peças de roupas até itens decorativos.</p>
            </div>

            <div class="div-micanga">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É MIÇANGA?</h4>
                </div>

                <img class="imagens" src="../assets/imagens/site//micanga.png">

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Miçangas são pequenos objetos decorativos de diferentes tamanhos, texturas, acabamentos, cores e materiais, podendo ser de pedra, osso, cerâmica, madeira, borracha, concha, plástico ou vidro. Geralmente são utilizadas na produção de acessórios.</p>
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