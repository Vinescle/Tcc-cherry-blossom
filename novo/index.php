<?php

include './conexao.php';

$sqlMarcas = "SELECT * FROM tb_marcas LIMIT 7";
$resultadoMarcas = mysqli_query($conexao, $sqlMarcas);

$sqlDestaques = "SELECT a.id_produtos,
a.nome_produto,
a.descricao_produto,
a.preco_produto,
a.qtd_produto,
b.url,
e.nome_categoria,
d.nome_sub_categoria
FROM tb_produtos a
INNER JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria
GROUP BY a.id_produtos
LIMIT 8";
$resultadoDestaques = mysqli_query($conexao, $sqlDestaques);

$sqlMaisVendidos = "SELECT a.id_produtos,
a.nome_produto,
a.descricao_produto,
a.preco_produto,
a.qtd_produto,
b.url,
e.nome_categoria,
d.nome_sub_categoria
FROM tb_produtos a
INNER JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria 
GROUP BY id_produtos
LIMIT 4";
$resultadoMaisVendidos = mysqli_query($conexao, $sqlMaisVendidos);

$sqlConfigAdm = "SELECT * FROM tb_adm_config";
$resultadoConfigAdm = mysqli_query($conexao, $sqlConfigAdm);
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
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/rodape.css" rel="stylesheet">

    <title>Cherry Blossom - Home</title>
</head>

<body>
    <?php
    include('./componentes/menu-cabeçalho.php');
    ?>
    <main>
        <main>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $rota; ?>/assets/imagens/storage/banners/<?php echo $configAdm['url_banner']; ?>" class="d-block w-100" alt="...">
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
        <div class="container-loja">

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
                            <div><img src="<?php echo $rota; ?>/assets/imagens/storage/marcas/<?php echo $resultadoMarcasFinal['icon_url'] ?>" class="imagem-marcas"></div>
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
                            <img class="foto-produtos" src="<?php echo $rota; ?>/assets/imagens/storage/produtos/<?php echo $resultadoDestaquesFinal[5]; ?>">
                            <div class="espacamento-produto">
                                <p class="tag-produto"><?php echo $resultadoDestaquesFinal['nome_categoria'] ?> > <?php echo $resultadoDestaquesFinal['nome_sub_categoria'] ?></p>
                                <h3 class="titulo-produto"><?php echo $resultadoDestaquesFinal['nome_produto'] ?></h3>
                                <div class="conjunto-preco-comprar">
                                    <p class="preco-produto">R$<?php echo $resultadoDestaquesFinal['preco_produto'] ?></p>
                                    <button class="botao-comprar"><a href="<?php echo $rota . '/produto.php?produto=' . $resultadoDestaquesFinal['id_produtos'] ?>">Comprar</a></button>
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
                </div> -->
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
                                <img class="foto-produtos" src="<?php echo $rota; ?>/assets/imagens/storage/produtos/<?php echo $resultadoMaisVendidosFinal[5]; ?>">
                                <div class="espacamento-produto">
                                    <p class="tag-produto"><?php echo $resultadoMaisVendidosFinal['nome_categoria'] ?> > <?php echo $resultadoMaisVendidosFinal['nome_sub_categoria'] ?></p>
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
                </div>
            </div>
    </main>

    <?php
    include('./componentes/rodape.php');
    ?>

    <?php
    include('./imports.php');
    ?>
</body>

</html>