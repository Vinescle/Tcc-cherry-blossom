<?php

include './conexao.php';

$sqlCategorias = "SELECT * FROM tb_categoria";
$resultadoCategorias = mysqli_query($conexao, $sqlCategorias);

$categorias = $resultadoCategorias->fetch_all(MYSQLI_ASSOC);

if (isset($_GET['pesquisaProduto'])) {
    $sqlBuscaProduto = "SELECT b.fk_id_marcas,
    a.id_produtos,
    a.nome_produto
    FROM tb_produtos a
    INNER JOIN tb_marcas_produtos b ON b.fk_id_produtos = a.id_produtos
    WHERE a.nome_produto LIKE '%$_GET[pesquisaProduto]%'
    OR a.descricao_produto LIKE '%$_GET[pesquisaProduto]%'";
    $resultadoBusca = mysqli_query($conexao, $sqlBuscaProduto);
    $resultadoBusca = mysqli_fetch_array($resultadoBusca);
    $sql = "SELECT * FROM tb_marcas_produtos WHERE fk_id_produtos = $resultadoBusca[1] LIMIT 1";
    $pesquisaProduto = mysqli_query($conexao, $sql);
    $pesquisaProduto = mysqli_fetch_assoc($pesquisaProduto);
}
$sqlProdutos = "SELECT a.id_produtos,
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
INNER JOIN tb_marcas_produtos f on f.fk_id_produtos = a.id_produtos ";



if (!empty($_GET['marca'])) {
    $sqlProdutos .= "WHERE f.fk_id_marcas = $_GET[marca] ";
} else if (isset($pesquisaProduto)) {
    $sqlProdutos .= "WHERE f.fk_id_marcas = $pesquisaProduto[fk_id_marcas] ";
} else {
    header("Location: $rota");
}

if (!empty($_GET['categoria'])) {
    $sqlProdutos .= "AND d.fk_id_categoria = $_GET[categoria] ";
}

if (!empty($_GET['categoria']) && !empty($_GET['sub_categorias'])) {
    foreach ($_GET['sub_categorias'] as $key => $subCategoriaId) {
        $key == 0 ? $sqlProdutos .= "AND " : $sqlProdutos .= "OR ";
        $sqlProdutos .= "d.id_sub_categoria = $subCategoriaId ";
    }
}

$sqlProdutos .= "GROUP BY a.id_produtos";

$resultadoProdutos = mysqli_query($conexao, $sqlProdutos);

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
    include('./componentes/menu-cabecalho.php');
    ?>
    <main class="margem-topo">
        <div class="container-loja pesquisa">
            <div class="filtros w-30">
                <div>
                    <label class="label-titulo-filtro">Pulseira</label>
                </div>

                <form action="<?php echo $rota; ?>/pesquisa.php" method="GET">
                    <input name="marca" value="<?php echo isset($_GET['marca']) ? $_GET['marca'] : $pesquisaProduto['fk_id_marcas']  ?>" hidden>
                    <div>
                        <div>
                            <label class="label-categorias-filtro">Categorias</label>
                        </div>
                        <div class="conjunto-checkbox">
                            <?php
                            foreach ($categorias as $categoria) {
                            ?>
                                <div class="center">
                                    <div class="tabela-checkbox_titulo center">
                                        <input id="categoria<?php echo $categoria['id_categoria']; ?>" data-limit="only-one-in-a-group" name="categoria" value="<?php echo $categoria['id_categoria']; ?>" type="checkbox" <?php if (!empty($_GET['categoria'])) {
                                                                                                                                                                                                                                if ($_GET['categoria'] == $categoria['id_categoria'])
                                                                                                                                                                                                                                    echo 'checked="checked"';
                                                                                                                                                                                                                            } ?>>
                                        <label class="label-conteudo-filtro" for="categoria<?php echo $categoria['id_categoria']; ?>"> <?php echo $categoria['nome_categoria']; ?></label>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if (!empty($_GET['categoria'])) {
                        $sqlSubCategorias = "SELECT * FROM tb_sub_categoria WHERE fk_id_categoria = $_GET[categoria]";
                        $resultadoSubCategorias = mysqli_query($conexao, $sqlSubCategorias);

                        $subCategorias = $resultadoSubCategorias->fetch_all(MYSQLI_ASSOC);
                    ?>
                        <div>
                            <div>
                                <label class="label-categorias-filtro">Subcategorias</label>
                            </div>
                        </div>
                        <div class="conjunto-checkbox">
                            <?php

                            foreach ($subCategorias as $subCategoria) {
                            ?>
                                <div class="center">
                                    <div class="tabela-checkbox_titulo center">
                                        <input name="sub_categorias[]" value="<?php echo $subCategoria['id_sub_categoria']; ?>" id="checkbox-sub-titulo<?php echo $subCategoria['id_sub_categoria']; ?>" type="checkbox" <?php if (!empty($_GET['categoria'])) {
                                                                                                                                                                                                                                if (!empty($_GET['sub_categorias']) && in_array($subCategoria['id_sub_categoria'], $_GET['sub_categorias']))
                                                                                                                                                                                                                                    echo 'checked="checked"';
                                                                                                                                                                                                                            } ?>>
                                        <label class="label-conteudo-filtro" for="checkbox-sub-titulo<?php echo $subCategoria['id_sub_categoria']; ?>"> <?php echo $subCategoria['nome_sub_categoria'] ?></label>
                                    </div>
                                </div>
                            <?php

                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="input-salvar">
                        <button class="botao-salvar">
                            Filtrar
                        </button>
                    </div>
                    <div class="input-salvar">
                        <a class="botao-salvar" href="<?php echo $rota ?>/pesquisa.php?marca=<?php echo isset($_GET['marca']) ? $_GET['marca'] : $pesquisaProduto['fk_id_marcas']  ?>">
                            Limpar
                        </a>
                    </div>
                </form>
            </div>
            <div class="conjunto-principal w-80">
                <div class="tags">
                    <div class="div-preco">
                        <label class="label-preco">Ordenar por</label>
                        <label class="label-preco negrito">: Menor preço</label>
                        <ion-icon class="icone-dropdown" name="chevron-down-outline"></ion-icon>
                    </div>
                </div>

                <div class="secao-destaques">
                    <?php
                    while ($produtos = mysqli_fetch_array($resultadoProdutos)) {
                    ?>
                        <div class="destaques-produtos">
                            <img class="foto-produtos" src="<?php echo $rota; ?>/assets/imagens/storage/produtos/<?php echo $produtos[5]; ?>">
                            <div class="espacamento-produto">
                                <p class="tag-produto"><?php echo $produtos['nome_categoria'] ?> > <?php echo $produtos['nome_sub_categoria'] ?></p>
                                <h3 class="titulo-produto"><?php echo $produtos['nome_produto'] ?></h3>
                                <div class="conjunto-preco-comprar">
                                    <p class="preco-produto">R$<?php echo $produtos['preco_produto'] ?></p>
                                    <button class="botao-comprar"><a href="<?php echo $rota . '/produto.php?produto=' . $produtos['id_produtos'] ?>">Comprar</a></button>
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

    <script>
        let cbxes = document.querySelectorAll('input[type="checkbox"][data-limit="only-one-in-a-group"]');
        [...cbxes].forEach((cbx) => {
            cbx.addEventListener('change', (e) => {
                if (e.target.checked)
                    uncheckOthers(e.target);
            });
        });

        function uncheckOthers(clicked) {
            let name = clicked.getAttribute('name');
            // find others in same group, uncheck them
            [...cbxes].forEach((other) => {
                if (other != clicked && other.getAttribute('name') == name)
                    other.checked = false;
            });
        }
    </script>

    <?php
    include('./componentes/rodape.php');
    ?>

    <?php
    include('./imports.php');
    ?>
</body>

</html>