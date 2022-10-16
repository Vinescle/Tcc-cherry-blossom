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
    <link href="<?php echo $rota; ?>/assets/css/pages/pesquisa.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/rodape.css" rel="stylesheet">

    <title>Cherry Blossom - Home</title>
</head>

<body>
    <?php
    include('./componentes/menu-cabeçalho.php');
    ?>
    <main class="margem-topo">
        <div class="container-loja pesquisa">
            <div class="filtros w-30">
                <div>
                    <label class="label-titulo-filtro">Pulseira</label>
                </div>

                <div>
                    <div>
                        <label class="label-categorias-filtro">Categorias</label>
                    </div>

                    <div class="conjunto-checkbox">
                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Papercraft</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Hama Beads</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Macramê</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Piçangas</label>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <label class="label-categorias-filtro">Subcategorias</label>
                    </div>

                    <div class="conjunto-checkbox">
                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Temático</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Colorido</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Verde</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Azul</label>
                        </div>
                    </div>
                </div>

                <div class="input-salvar">
                    <button class="botao-salvar">
                        <input type="submit" value="Salvar">
                        Salvar
                    </button>
                </div>
            </div>

            <div class="conjunto-principal w-80">
                <div class="tags">
                    <div class="div-tag">
                        <label class="label-tags">Macramê > Verde</label>
                    </div>

                    <div class="div-preco">
                        <label class="label-preco">Ordenar por</label>
                        <label class="label-preco negrito">: Menor preço</label>
                        <ion-icon class="icone-dropdown" name="chevron-down-outline"></ion-icon>
                    </div>
                </div>

                <div class="secao-destaques">
                    <div class="destaques-produtos">
                        <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
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
                        <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
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
                        <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
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
                        <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
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
                        <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
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
                        <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
                        <div class="espacamento-produto">
                            <p class="tag-produto">Macramê > Pulseiras</p>
                            <h3 class="titulo-produto">Pulseira Pet</h3>
                            <div class="conjunto-preco-comprar">
                                <p class="preco-produto">R$15,00</p>
                                <button class="botao-comprar"><a href="#">Comprar</a></button>
                            </div>
                        </div>
                    </div>
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