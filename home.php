<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="./css/reset.css" rel="stylesheet">
    <link href="./css/estilo-home.css" rel="stylesheet">

    <title>Cherry Blossom - Home</title>

    <style>
        .texto {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;


            margin: 30px 205px 0 205px;
        }

        .botao-verTodos {
            border: none;
            background: transparent;
        }

        .marcas-container {
            margin: 0px 205px 0 205px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .bolas-marcas {
            border-radius: 1000px;
            width: 110px;
            height: 110px;
            background: #08cfaa;
            overflow: hidden;
        }

        .imagem-marcas {
            width: 100%;
            height: 100%;
            transform: translate(0, 20px);
        }

        .titulo {
            color: #323232;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .ver-todos {
            color: #1467FF;
            font-family: 'Inter', sans-serif;
            text-decoration: underline;
        }

        .secao-destaques {
            margin: 5px 205px 30px 205px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .destaques-produtos {
            display: inline-block;

            border: 1px solid #A3B3CC;
            border-radius: 30px;
            overflow: hidden;
        }

        .foto-produtos {
            max-width: 200px;
            min-height: 150px;
            border-bottom: 1px solid #A3B3CC;
            width: auto;
            height: auto;
        }

        .tag-produto {
            font-weight: 400;
            color: #838FAE;
            font-size: 9px;
            font-family: 'Inter', sans-serif;
            margin: 0px;
        }

        .titulo-produto {
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 17px;
            margin-bottom: 5px;
            color: #323232;
        }

        .conjunto-preco-comprar {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;

            padding-bottom: 5px;
        }

        .preco-produto {
            color: #323232;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            margin: 0px;
            font-size: 12px;
        }

        .botao-comprar {
            font-family: 'Inter', sans-serif;
            background-color: transparent;
            border: none;
            color: #1467FF;
            font-size: 12px;
        }

        .espacamento-produto {
            margin: 10px 15px 10px 15px;
        }

    </style>
</head>

<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Cabeçalho da home -->

    <?php
    include './Componentes/cabecalhoHome.php'
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
    <div>
        <div class="texto">
            <div>
                <h2 class="titulo">Marcas</h2>
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
                <div><img src="./imagens/site/mickey.png" class="imagem-marcas"></div>
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
    </div>

    <!-- Destques -->
    <div>
        <div class="texto">
            <div>
                <h2 class="titulo">Destaque</h2>
            </div>
            <div>
                <button class="botao-verTodos"><a class="ver-todos">Ver todos</a></button>
            </div>
        </div>
        <div class="secao-destaques">
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Pulseira-animal.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Macramê > Pulseiras</p>
                    <h3 class="titulo-produto">Pulseira Pet</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$15,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Chaveiro-palhaço.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Hama Beads > Chaveiros</p>
                    <h3 class="titulo-produto">Pulseira Palhaçu</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$2000,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Escultura-mão.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Papercraft > Decorações</p>
                    <h3 class="titulo-produto">Escultura de mão</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$500,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Pulseira-dedo-verde.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Macramê > Pulseiras</p>
                    <h3 class="titulo-produto">Pulseira Dedo Verde</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$15,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Pulseira-animal.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Macramê > Pulseiras</p>
                    <h3 class="titulo-produto">Pulseira Pet</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$15,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Chaveiro-palhaço.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Hama Beads > Chaveiros</p>
                    <h3 class="titulo-produto">Pulseira Palhaçu</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$2000,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Escultura-mão.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Papercraft > Decorações</p>
                    <h3 class="titulo-produto">Escultura de mão</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$500,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
            <div class="destaques-produtos">
                <img class="foto-produtos" src="./imagens/produtos/Pulseira-dedo-verde.png">
                <div class="espacamento-produto">
                    <p class="tag-produto">Macramê > Pulseiras</p>
                    <h3 class="titulo-produto">Pulseira Dedo Verde</h3>
                    <div class="conjunto-preco-comprar">
                        <p class="preco-produto">R$15,00</p>
                        <button class="botao-comprar"><a href="#">Comprar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mais vendidos -->
    <div>
        <div>
            <div class="texto">
                <div>
                    <h2 class="titulo">Mais vendidos</h2>
                </div>
                <div>
                    <button class="botao-verTodos"><a class="ver-todos">Ver todos</a></button>
                </div>
            </div>
            <div class="secao-destaques">
                <div class="destaques-produtos">
                    <img class="foto-produtos" src="./imagens/produtos/Pulseira-animal.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Pet</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>
                <div class="destaques-produtos">
                    <img class="foto-produtos" src="./imagens/produtos/Chaveiro-palhaço.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Hama Beads > Chaveiros</p>
                        <h3 class="titulo-produto">Pulseira Palhaçu</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$2000,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>
                <div class="destaques-produtos">
                    <img class="foto-produtos" src="./imagens/produtos/Escultura-mão.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Papercraft > Decorações</p>
                        <h3 class="titulo-produto">Escultura de mão</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$500,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>
                <div class="destaques-produtos">
                    <img class="foto-produtos" src="./imagens/produtos/Pulseira-dedo-verde.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Dedo Verde</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include './Componentes/rodapeHome.php';
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>