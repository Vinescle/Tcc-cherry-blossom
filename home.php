<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="./css/reset.css" rel="stylesheet">
    <link href="./css/estilo-home.css" rel="stylesheet">

    <title>Cherry Blossom - Home</title>

    <style>
        .texto-marcas {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;


            margin: 30px 170px 0 170px;
        }

        .botao-verTodos {
            border: none;
            background: transparent;
        }

        .marcas-container {
            margin: 0px 170px 0 170px;

            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .bolas-marcas {
            border-radius: 1000px;
            width: 100px;
            height: 100px;
            background: #08cfaa;
            overflow: hidden;
        }

        .imagem-marcas {
            width: 100%;
            height: 100%;
            transform: translate(0, 20px);
        }

        .titulo-marcas {
            color: #323232;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
        }

        .ver-todos {
            color: blue;
            font-family: 'Inter', sans-serif;
            text-decoration: underline;
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

    <!-- Main da home / Carrossel -->
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imagens/site/banner.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/site/banner.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/site/banner.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>

    <!-- Marcas -->
    <div class="texto-marcas">
        <div>
            <h2 class="titulo-marcas">Marcas</h2>
        </div>
        <div>
            <button class="botao-verTodos"><a class="ver-todos">Ver todos</a></button>
        </div>
    </div>
    <div class="marcas-container">
        <div class="bolas-marcas">
            <div><img src="./imagens/site/minecraft.png" class="imagem-marcas"></div>
        </div>
        <div class="bolas-marcas">
            <div><img src="./imagens/site/frozen.png" class="imagem-marcas"></div>
        </div>
        <div class="bolas-marcas">
            <div><img src="./imagens/site/my-little-pony.png" class="imagem-marcas"></div>
        </div>
        <div class="bolas-marcas">
            <div><img src="./imagens/site/Hora-de-aventura.png" class="imagem-marcas"></div>
        </div>
        <div class="bolas-marcas">
            <div><img src="./imagens/site/vocaloid.png" class="imagem-marcas"></div>
        </div>
        <div class="bolas-marcas">
            <div><img src="./imagens/site/splatoon.png" class="imagem-marcas"></div>
        </div>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>