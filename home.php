<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="./css/reset.css" rel="stylesheet">
    <link href="./css/estilo-home.css" rel="stylesheet">
    <title>Cherry Blossom - Home</title>

    <style>
        .main-banner {
            position: relative;
        }

        .div-botoes {
            position: absolute;
            display: flex;

            position: absolute;
            top: 17vh;
            gap: 86vw;
            width: 100%;
        }

        .botoes {
            border: none;
            background: transparent;
            justify-content: space-around;
        }

        .icones-carrossel {
            height: 38px;
            width: 38px;

            color: #FFF;
        }

        .icones-sombra {
            height: 40px;
            width: 40px;

            color: #000;
        }
    </style>
</head>

<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Cabeçalho da home -->

    <?php
    include 'cabecalho/cabecalhoHome.php'
    ?>

    <!-- Main da home -->
    <main>
        <div class="main-banner">
            <img src="./imagens/site/banner.png" class="imagem-banner">
            <div class="div-botoes">
                <button class="botoes">
                    <ion-icon name="arrow-back-circle-outline" class="icones-sombra"></ion-icon>
                </button>
                <button class="botoes">
                    <ion-icon name="arrow-forward-circle-outline" class="icones-sombra"></ion-icon>
                </button>
            </div>
            <div class="div-botoes">
                <button class="botoes">
                    <ion-icon name="arrow-back-circle-outline" class="icones-carrossel"></ion-icon>
                </button>
                <button class="botoes">
                    <ion-icon name="arrow-forward-circle-outline" class="icones-carrossel"></ion-icon>
                </button>
            </div>
        </div>
    </main>

    <!-- Rodapé da home
    <footer class="rodape">
        <div>
            <h3>Sugestão de Produto</h3>
            <h3>Fale com o Vendedor</h3>
            <p>Acompanhe nossas redes sociais</p>
        </div>
        <div>
            <h3>Ajuda e Suporte</h3>
            <p>Como comprar</p>
            <p>Cuidados Com os Produtos</p>
            <p>Visualização 3D</p>
            <p>O que é Papercraft?</p>
            <p>O que é Hama Beads?</p>
            <p>O que é Macramê?</p>
            <p>O que é miçanga?</p>
        </div>
        <div>
            <h3>Institucional</h3>
            <p></p>
            <p></p>
            <p></p>

            <h3>Se inscreva para receber novidades!</h3>
            <input type="TEXT" name="email-noticias">
        </div>
    </footer>
-->
</body>

</html>