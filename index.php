<?php
include './conexao.php';

if (isset($_GET['deslogar'])) {
    unset($_SESSION['id_usuario']);
    unset($_SESSION['logado']);
    session_destroy();
}





// CONFIGURAÇÕES E INSERTS DAS TABELAS DE VISITAS
$sqlVisita = "INSERT INTO tb_log_visitas (data_visita) VALUES (NOW())";
mysqli_query($conexao, $sqlVisita);
$ultimoIdVisita = mysqli_insert_id($conexao);
$sqlUltimaVisita = "SELECT DATE_FORMAT(data_visita,'%m') FROM tb_log_visitas WHERE id_log_visita = $ultimoIdVisita";
$resultadoUltimoId = mysqli_query($conexao, $sqlUltimaVisita);
$resultadoUltimoId = mysqli_fetch_array($resultadoUltimoId);
$fk_id_mes = $resultadoUltimoId[0];
$sqlUltimaVisita = "UPDATE tb_log_visitas SET fk_id_mes = $fk_id_mes WHERE id_log_visita = $ultimoIdVisita";
mysqli_query($conexao, $sqlUltimaVisita);



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
LEFT JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
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
LEFT JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
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
    include('./componentes/menu-cabecalho.php');
    ?>
    <main>
        <main class="banner-carrossel">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $rota; ?>/assets/imagens/storage/banner/<?php echo $configAdm['url_banner']; ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </main>

        <div class="bola-whatsapp">
            <a href="<?php echo $configAdm['url_whatsapp'] ?>" target="_blank">
                <ion-icon class="logo-whatsapp" name="logo-whatsapp"></ion-icon>
            </a>
        </div>
        
        <div class="container-loja">
            <div>
                <div class="texto">
                    <div>
                        <h2 class="titulo">Marcas</h2>
                    </div>
                    <div>
                        <button class="botao-verTodos"><a class="ver-todos" href="<?php echo $rota; ?>/homeMarcas.php" ?>Ver todos</a></button>
                    </div>
                </div>
                <div class="marcas-container">
                    <?php
                    while ($resultadoMarcasFinal = mysqli_fetch_array($resultadoMarcas)) {
                    ?>
                        <a href="<?php echo $rota; ?>/pesquisa.php?marca=<?php echo $resultadoMarcasFinal['id_marca']; ?>">
                            <div class="bolas-marcas">
                                <div class="marca-circulo" style="background-color: <?php echo $resultadoMarcasFinal['cor_marca']; ?>">
                                    <div class="marca-overlay"></div>
                                    <label class="label-marca" for="checkbox-<?php echo $resultadoBolas['id_marca'] ?>">
                                        <?php echo $resultadoMarcasFinal['nome_marca'] ?>
                                    </label>
                                    <div>
                                        <img src="<?php echo $rota; ?>/assets/imagens/storage/marcas/<?php echo $resultadoMarcasFinal['icon_url'] ?>" class="imagem-marcas">
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
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
                            <img class="foto-produtos" src="<?php echo $rota; ?>/assets/imagens/storage/produtos/<?php echo $resultadoDestaquesFinal[5]; ?>">
                            <div class="espacamento-produto">
                                <p class="tag-produto"><?php echo $resultadoDestaquesFinal['nome_categoria'] ?> > <?php echo $resultadoDestaquesFinal['nome_sub_categoria'] ?></p>
                                <h3 class="titulo-produto"><?php echo $resultadoDestaquesFinal['nome_produto'] ?></h3>
                                <div class="conjunto-preco-comprar">
                                    <p class="preco-produto">R$<?php echo number_format($resultadoDestaquesFinal['preco_produto'], 2, ",", ".") ?></p>
                                    <button class="botao-comprar"><a href="<?php echo $rota . '/produto.php?produto=' . $resultadoDestaquesFinal['id_produtos'] ?>">Comprar</a></button>
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
                                <img class="foto-produtos" src="<?php echo $rota; ?>/assets/imagens/storage/produtos/<?php echo $resultadoMaisVendidosFinal[5]; ?>">
                                <div class="espacamento-produto">
                                    <p class="tag-produto"><?php echo $resultadoMaisVendidosFinal['nome_categoria'] ?> > <?php echo $resultadoMaisVendidosFinal['nome_sub_categoria'] ?></p>
                                    <h3 class="titulo-produto"><?php echo $resultadoMaisVendidosFinal['nome_produto'] ?></h3>
                                    <div class="conjunto-preco-comprar">
                                        <p class="preco-produto">R$<?php echo $resultadoMaisVendidosFinal['preco_produto'] ?></p>
                                        <button class="botao-comprar"><a href="<?php echo $rota . '/produto.php?produto=' . $resultadoMaisVendidosFinal['id_produtos'] ?>">Comprar</a></button>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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