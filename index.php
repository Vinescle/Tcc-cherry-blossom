<?php

include './conexao/conexao.php';

$sqlMarcas = "SELECT * FROM tb_marcas LIMIT 7";
$resultadoMarcas = mysqli_query($conexao, $sqlMarcas);

$sqlDestaques = "SELECT * FROM tb_produtos a INNER JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto GROUP BY id_produtos LIMIT 8";
$resultadoDestaques = mysqli_query($conexao, $sqlDestaques);

$sqlMaisVendidos = "SELECT * FROM tb_produtos a INNER JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto GROUP BY id_produtos LIMIT 4";
$resultadoMaisVendidos = mysqli_query($conexao, $sqlMaisVendidos);

$sqlConfigAdm = "SELECT * FROM tb_adm_config";
$resultadoConfigAdm = mysqli_query($conexao, $sqlConfigAdm);
$configAdm = mysqli_fetch_array($resultadoConfigAdm);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- TESTANDO AAHAHAHAH GUANABARA SEU IMUNDO -->
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="./css/reset.css" rel="stylesheet">
    <link href="../imagens/site/Logo_PNG_normal.png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="./css/index.css" rel="stylesheet">
    <link href="./css/estilo-home.css" rel="stylesheet">

    <title>Cherry Blossom - Home</title>
</head>

<body class="corpo">
    <div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- Cabeçalho da home -->

        <?php
        session_start();

        if (isset($_SESSION['logado'])) {
            include './Componentes/cabecalhoHomeLogado.php';
        } else if (!isset($_SESSION['logado'])) {
            include './Componentes/cabecalhoHome.php';
        }

        // if (isset($_session['permissao_Adm'])) {
        //     if ($_session['permissao_Adm'] == 2) {
        //         include './Componentes/cabecalhoHomeAdm.php';
        //     } else {
        //         include './Componentes/cabecalhoHome.php';
        //     }
        // } else {
        //     include './Componentes/cabecalhoHome.php';
        // }
        ?>

        <!-- Main da home / Carrossel -->
        <main>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imagens/site/banner.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imagemBancoDeDados/banners/<?php echo $configAdm['url_banner']; ?>" class="d-block w-100" alt="...">
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
                <?php
                while ($resultadoMarcasFinal = mysqli_fetch_array($resultadoMarcas)) {
                ?>
                    <div class="bolas-marcas" style="background-color: <?php echo $resultadoMarcasFinal['cor_marca'] ?>;">
                        <div><img src="./imagemBancoDeDados/marcas/<?php echo $resultadoMarcasFinal['icon_url'] ?>" class="imagem-marcas"></div>
                    </div>
                <?php
                    }
                ?>
            </div>
            <!-- <div class="marcas-container">
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
                </div> -->
        </div>
    </div>

    <!-- Destques -->
    <div>
        <div class="texto">
            <div>
                <h2 class="titulo">Destaque</h2>
            </div>
        </div>
        <div class="secao-destaques">
            <?php
            while ($resultadoDestaquesFinal = mysqli_fetch_array($resultadoDestaques)) {
            ?>
                <div class="destaques-produtos">
                    <img class="foto-produtos" src="./imagemBancoDeDados/produtos/<?php echo $resultadoDestaquesFinal[11]; ?>">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto"><?php echo $resultadoDestaquesFinal['nome_produto'] ?></h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$<?php echo $resultadoDestaquesFinal['preco_produto'] ?></p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Mais vendidos -->
    <div>
        <div>
            <div class="texto">
                <div>
                    <h2 class="titulo">Mais vendidos</h2>
                </div>
            </div>
            <div class="secao-destaques">
                <?php
                while ($resultadoMaisVendidosFinal = mysqli_fetch_array($resultadoMaisVendidos)) {
                ?>
                    <div class="destaques-produtos">
                        <img class="foto-produtos" src="./imagemBancoDeDados/produtos/<?php echo $resultadoMaisVendidosFinal[11]; ?>">
                        <div class="espacamento-produto">
                            <p class="tag-produto">Macramê > Pulseiras</p>
                            <h3 class="titulo-produto"><?php echo $resultadoMaisVendidosFinal['nome_produto'] ?></h3>
                            <div class="conjunto-preco-comprar">
                                <p class="preco-produto">R$<?php echo $resultadoMaisVendidosFinal['preco_produto'] ?></p>
                                <button class="botao-comprar"><a href="#">Comprar</a></button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- <div class="destaques-produtos">
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
                    </div> -->
            </div>

            <?php
            include './Componentes/rodapeHome.php';
            include './Componentes/sugestaoProduto.php';
            ?>
            <script src="./Componentes/js/sugestaoProduto.js"></script>
            <script src="./Componentes/js/checkboxMenu.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        </div>

</body>

</html>