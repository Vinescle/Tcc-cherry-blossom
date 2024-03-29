<?php
$page = 'gerenciar';
$limit = 0;
if (isset($pagina) || isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
    if ($pagina < 0) {
        header('location:../home-adm/gerenciar.php');
    }
    $limit = 8 * $pagina;
} else {
    $pagina = 0;
}

include '../conexao.php';
include '../verifica-logado.php';

if (isset($_GET['pesquisa'])) {

    $sql = "SELECT a.id_produtos, a.nome_produto, a.preco_produto, a.qtd_produto, b.nome_marca, c.nome_categoria FROM tb_produtos a
    INNER JOIN tb_marcas_produtos marcasRE ON a.id_produtos = marcasRE.fk_id_produtos
    LEFT JOIN tb_marcas b ON b.id_marca = marcasRE.fk_id_marcas
    LEFT JOIN tb_produtos_sub_categorias subcategoriasRE ON a.id_produtos = subcategoriasRE.fk_id_produtos
    LEFT JOIN tb_sub_categoria subcategorias  ON subcategorias.id_sub_categoria = subcategoriasRE.fk_id_sub_categorias
    LEFT JOIN tb_categoria c ON c.id_categoria = subcategorias.fk_id_categoria WHERE a.nome_produto LIKE '%$_GET[pesquisa]%' GROUP BY a.id_produtos LIMIT $limit,8";
} else {

    $sql = "SELECT a.id_produtos, a.nome_produto, a.preco_produto, a.qtd_produto, b.nome_marca, c.nome_categoria FROM tb_produtos a
    INNER JOIN tb_marcas_produtos marcasRE ON a.id_produtos = marcasRE.fk_id_produtos
    LEFT JOIN tb_marcas b ON b.id_marca = marcasRE.fk_id_marcas
    LEFT JOIN tb_produtos_sub_categorias subcategoriasRE ON a.id_produtos = subcategoriasRE.fk_id_produtos
    LEFT JOIN tb_sub_categoria subcategorias  ON subcategorias.id_sub_categoria = subcategoriasRE.fk_id_sub_categorias
    LEFT JOIN tb_categoria c ON c.id_categoria = subcategorias.fk_id_categoria GROUP BY a.id_produtos LIMIT $limit,8";

}

$sqlProdutosPopulares = "SELECT fk_id_produto, b.nome_produto, COUNT(*) AS quantidade_acessos FROM tb_produto_popular a 
INNER JOIN tb_produtos b ON a.fk_id_produto = b.id_produtos GROUP BY fk_id_produto ORDER BY COUNT(*) DESC LIMIT 5";
$resultadoProdutosPopulares = mysqli_query($conexao, $sqlProdutosPopulares);

$sqlProdutosVendidos = "SELECT id_produto, c.nome_produto, COUNT(*) AS quantidadeComprada FROM tb_produto_pedido a
INNER JOIN tb_usuario_pedido b ON a.fk_id_pedido = b.id_usuario_pedido
INNER JOIN tb_produtos c ON  c.id_produtos = a.id_produto GROUP BY id_produto
ORDER BY COUNT(*) DESC LIMIT 5";
$resultadoProdutosVendidos = mysqli_query($conexao, $sqlProdutosVendidos);


try {
    $resultadoProdutos = mysqli_query($conexao, $sql);
    if($resultadoProdutos->num_rows === 0 && $pagina > 0){
        $pagina -= 1;
        header('location:./gerenciar.php?pagina='.$pagina);
    }

} catch (\Throwable $th) {
    //throw $th;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-lateral.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/gerenciar.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabecalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <div class="conteudo-acoes">
                    <div class="grupo-filtro">
                        <div class="cabecalho-pesquisa">
                            <form action="?" method="get">
                                <div class="formulario-gerenciamento">
                                    <button class="botao-enviar" type="submit">
                                    </button>
                                    <input class="botao-pesquisa_produtos config-gerenciamento" type="TEXT" name="pesquisa">
                                </div>
                            </form>
                        </div>

                        <div class="espacamento-botoes">
                            <div class="botao-opcoes">
                                <div class="botao-icone">
                                    <a class="botao-texto" href="<?php echo $rota; ?>/home-adm/produtos/form-cadastro.php">
                                        <ion-icon name="add-outline"></ion-icon>
                                        Cadastrar
                                    </a>
                                </div>

                                <div class="botao-icone" onclick="altera()" style="cursor:pointer;">
                                    <a class="botao-texto">
                                        <ion-icon name="brush-outline"></ion-icon>
                                        Editar
                                    </a>
                                </div>

                                <div class="botao-icone" onclick="excluir()" style="cursor:pointer;">
                                    <a class="botao-texto">
                                        <ion-icon name="trash-outline"></ion-icon>
                                        Apagar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="botoes-setas">
                        <a class="botao-texto" href="./gerenciar.php?pagina=<?php echo $pagina - 1 ?>">
                            <ion-icon class="setas" name="chevron-back-outline"></ion-icon>
                        </a>
                        <a class="botao-texto" href="./gerenciar.php?pagina=<?php echo $pagina + 1 ?>">
                            <ion-icon class="setas" name="chevron-forward-outline"></ion-icon>
                        </a>
                    </div>

                </div>


                <div class="conjunto-tabelas">
                    <table class="tabela-destaques">
                        <tr>
                            <th class="tabela-destaques_titulo" colspan="2">Mais Vendidos</th>
                        </tr>

                        <?php
                        $contadorMaidVendidos = 0;
                        while ($ProdutosVendidos = mysqli_fetch_array($resultadoProdutosVendidos)) {
                            $contadorMaidVendidos += 1;
                        ?>
                            <tr>
                                <td class="tabela-destaques_id"><?php echo $ProdutosVendidos['id_produto'] ?></td>
                                <td class="tabela-destaques_conteudo"><?php echo $ProdutosVendidos['nome_produto'] ?></td>
                            </tr>
                            <?php
                        }
                        if ($contadorMaidVendidos < 5) {
                            for ($i = $contadorMaidVendidos; $i < 5; $i++) {
                            ?>
                                <tr>
                                    <td class="tabela-destaques_id">00</td>
                                    <td class="tabela-destaques_conteudo">Sem produtos para este cargo</td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>

                    <table class="tabela-destaques">
                        <tr>
                            <th class="tabela-destaques_titulo" colspan="2">Mais Populares</th>
                        </tr>

                        <?php
                        $contadorMaisPopulares = 0;
                        while ($ProdutosPopulares = mysqli_fetch_array($resultadoProdutosPopulares)) {
                            $contadorMaisPopulares += 1;
                        ?>
                            <tr>
                                <td class="tabela-destaques_id"><?php echo $ProdutosPopulares['fk_id_produto'] ?></td>
                                <td class="tabela-destaques_conteudo"><?php echo $ProdutosPopulares['nome_produto'] ?></td>
                            </tr>
                            <?php
                        }
                        if ($contadorMaisPopulares < 5) {
                            for ($i = $contadorMaisPopulares; $i < 5; $i++) {
                            ?>
                                <tr>
                                    <td class="tabela-destaques_id">00</td>
                                    <td class="tabela-destaques_conteudo">Sem produtos para este cargo</td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>

                <div>
                    <form action="./produtos/deletaProduto.php" method="GET" id="form">
                        <table class="tabela-principal">
                            <tr>
                                <th class="tabela-principal_titulo">
                                    <div class="tabela-checkbox_titulo">
                                        <input class="checkboxPrincipal" onclick="clickPrincipal(this)" id="checkbox-titulo" type="checkbox">
                                        <label for="checkbox-titulo"></label>
                                    </div>
                                </th>
                                <th class="tabela-principal_titulo tabela-principal_tituloId">ID</th>
                                <th class="tabela-principal_titulo tabela-principal_tituloProduto">Produto</th>
                                <th class="tabela-principal_titulo tabela-principal_tituloMarca">Marca</th>
                                <th class="tabela-principal_titulo tabela-principal_tituloCategoria">Categoria</th>
                                <th class="tabela-principal_titulo tabela-principal_tituloPreco">Preço</th>
                                <th class="tabela-principal_titulo tabela-principal_tituloEstoque">Estoque</th>
                            </tr>
                            <?php
                            while ($resultadoTabelaPrincipal = mysqli_fetch_array($resultadoProdutos)) {
                            ?>
                                <tr>
                                    <td class="tabela-principal_checkbox">
                                        <div class="tabela-checkbox_conteudo">
                                            <input name="idproduto[]" class="checkbox" value="<?php echo $resultadoTabelaPrincipal['id_produtos']; ?>" id="checkbox-conteudo<?php echo $resultadoTabelaPrincipal['id_produtos']; ?>" type="checkbox">
                                            <label for="checkbox-conteudo<?php echo $resultadoTabelaPrincipal['id_produtos']; ?>"></label>
                                        </div>
                                    </td>
                                    <td class="tabela-principal_id"><?php echo $resultadoTabelaPrincipal['id_produtos']; ?></td>
                                    <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['nome_produto']; ?></td>
                                    <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['nome_marca']; ?></td>
                                    <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['nome_categoria']; ?></td>
                                    <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['preco_produto']; ?></td>
                                    <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['qtd_produto']; ?></td>
                                    <td><input type="text" style="display: none;" value="<?php echo $resultadoTabelaPrincipal['id_produtos']; ?>"></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </form>
                    </table>
                </div>
            </div>
        </div>

        <script>
            const form = document.querySelector('#form');
            const checkbox = document.querySelectorAll('.checkbox');
            const checkboxPrincipal = document.querySelector('.checkboxPrincipal');

            function clickPrincipal(source) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i] != source)
                        checkboxes[i].checked = source.checked;
                }
            }

            function excluir() {
                form.action = "./produtos/deletaProduto.php";
                form.submit();

            }

            function altera() {
                form.action = "./produtos/form-AlteraProduto.php";
                form.submit();
            }
        </script>

        <?php
        include('../imports.php');
        ?>
</body>

</html>