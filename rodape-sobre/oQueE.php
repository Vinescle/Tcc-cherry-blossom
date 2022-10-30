<?php
include '../conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/rodape-itens/oQueE.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
</head>

<body>

    <?php
    // session_start();

    if (isset($_SESSION['logado'])) {
        include "/componentes/menu-cabeçalho.php";
    } else if (!isset($_SESSION['logado'])) {
        include "/componentes/menu-cabeçalho.php";
    }
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="div-papercraft">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É PAPERCRAFT?</h4>
                </div>

                <img class="imagens" src="../imagens/site/papercraft.png">

                <p class="texto">Papercraft é um método de construir objetos tridimensionais utilizando papel, uma arte parecida com o origami, mas se diferencia por utilizar dobraduras, cortes, colagem, moldagem e até mesmo criação de camadas. Apesar de parecerem frágeis por serem de papel, as peças são feitas com papéis mais grossos e possuem um acabamento em verniz e goma laca, os tornando mais resistentes.</p>

                <p class="texto">Qualquer coisa pode se transformar em um papercraft, tendo diferentes tamanhos e servindo para diversas finalidades.</p>
            </div>

            <div class="div-hamaBeads">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É HAMA BEADS?</h4>
                </div>

                <img class="imagens" src="../imagens/site/hama-beads.png">

                <p class="texto">Hama beads são objetos feitos utilizando pequenas peças plásticas unidas, podendo-se criar qualquer coisa em um estilo pixel art. Com eles, podem ser criados diversos objetos, como acessórios, decorações, porta-copos, chaveiros e quadros.</p>
            </div>

            <div class="div-macrame">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É MACRAMÊ?</h4>
                </div>

                <img class="imagens" src="../imagens/site/macrame.png">

                <p class="texto">O macramê é uma técnica de tecelagem manual que utiliza nós para criar diferentes tipos de peças. Vários tipos de fios são usados, dando origem a diferentes itens, desde peças de roupas até itens decorativos.</p>
            </div>

            <div class="div-micanga">
                <div class="div-subtitulo">
                    <h4 class="subtitulo">O QUE É MIÇANGA?</h4>
                </div>

                <img class="imagens" src="../imagens/site//micanga.png">

                <p class="texto">Miçangas são pequenos objetos decorativos de diferentes tamanhos, texturas, acabamentos, cores e materiais, podendo ser de pedra, osso, cerâmica, madeira, borracha, concha, plástico ou vidro. Geralmente são utilizadas na produção de acessórios.</p>
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