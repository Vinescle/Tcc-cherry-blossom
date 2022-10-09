<?php
$page = 'gerenciar';
include '../conexao.php';
$sql = "SELECT a.id_produtos, a.nome_produto, a.preco_produto, a.qtd_produto, b.nome_marca, c.nome_categoria FROM tb_produtos a
    INNER JOIN tb_marcas_produtos marcasRE ON a.id_produtos = marcasRE.fk_id_produtos
    INNER JOIN tb_marcas b ON b.id_marca = marcasRE.fk_id_marcas
    INNER JOIN tb_produtos_sub_categorias subcategoriasRE ON a.id_produtos = subcategoriasRE.fk_id_produtos
    INNER JOIN tb_sub_categoria subcategorias  ON subcategorias.id_sub_categoria = subcategoriasRE.fk_id_sub_categorias
    INNER JOIN tb_categoria c ON c.id_categoria = subcategorias.fk_id_categoria";
try {
    $resultadoProdutos = mysqli_query($conexao, $sql);
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
    include('../componentes/menu-cabeçalho.php');
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
                            <form>
                                <div class="formulario-gerenciamento">
                                    <button class="botao-enviar" type="submit">
                                    </button>
                                    <input class="botao-pesquisa_produtos config-gerenciamento" type="TEXT">
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

                                <div class="botao-icone">
                                    <a class="botao-texto">
                                        <ion-icon name="brush-outline"></ion-icon>
                                        Editar
                                    </a>
                                </div>

                                <div class="botao-icone">
                                    <a class="botao-texto">
                                        <ion-icon name="trash-outline"></ion-icon>
                                        Apagar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="botoes-setas">
                        <a class="botao-texto">
                            <ion-icon class="setas" name="chevron-back-outline"></ion-icon>
                        </a>
                        <a class="botao-texto">
                            <ion-icon class="setas" name="chevron-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>


                <div class="conjunto-tabelas">
                    <table class="tabela-destaques">
                        <tr>
                            <th class="tabela-destaques_titulo" colspan="2">Mais Vendidos</th>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">1</td>
                            <td class="tabela-destaques_conteudo">Xiuaua mimadinho de miami</td>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">2</td>
                            <td class="tabela-destaques_conteudo">Pulseira pais e amo</td>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">3</td>
                            <td class="tabela-destaques_conteudo">Pulseira pais e amo</td>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">4</td>
                            <td class="tabela-destaques_conteudo">Xiuaua mimadinho de miami</td>
                        </tr>
                    </table>

                    <table class="tabela-destaques">
                        <tr>
                            <th class="tabela-destaques_titulo" colspan="2">Mais Populares</th>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">1</td>
                            <td class="tabela-destaques_conteudo">Xiuaua mimadinho de miami</td>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">2</td>
                            <td class="tabela-destaques_conteudo">Pulseira pais e amo</td>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">3</td>
                            <td class="tabela-destaques_conteudo">Pulseira pais e amo</td>
                        </tr>

                        <tr>
                            <td class="tabela-destaques_id">4</td>
                            <td class="tabela-destaques_conteudo">Xiuaua mimadinho de miami</td>
                        </tr>
                    </table>
                </div>

                <div>
                    <table class="tabela-principal">
                        <tr>
                            <th class="tabela-principal_titulo">
                                <div class="tabela-checkbox_titulo">
                                    <input id="checkbox-titulo" type="checkbox">
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
                                        <input id="checkbox-conteudo1" type="checkbox">
                                        <label for="checkbox-conteudo1"></label>
                                    </div>
                                </td>
                                <td class="tabela-principal_id"><?php echo $resultadoTabelaPrincipal['id_produtos']; ?></td>
                                <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['nome_produto']; ?></td>
                                <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['nome_marca']; ?></td>
                                <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['nome_categoria']; ?></td>
                                <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['preco_produto']; ?></td>
                                <td class="tabela-principal_conteudo"><?php echo $resultadoTabelaPrincipal['qtd_produto']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo1" type="checkbox">
                                    <label for="checkbox-conteudo1"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">1</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo">Chevrolet</td>
                            <td class="tabela-principal_conteudo">Carro</td>
                            <td class="tabela-principal_conteudo">89.000</td>
                            <td class="tabela-principal_conteudo">1</td>
                        </tr>

                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo2" type="checkbox">
                                    <label for="checkbox-conteudo2"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">2</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                        </tr>

                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo3" type="checkbox">
                                    <label for="checkbox-conteudo3"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">3</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                        </tr>

                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo4" type="checkbox">
                                    <label for="checkbox-conteudo4"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">4</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                        </tr>

                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo5" type="checkbox">
                                    <label for="checkbox-conteudo5"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">5</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                        </tr>

                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo6" type="checkbox">
                                    <label for="checkbox-conteudo6"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">6</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                        </tr>

                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo7" type="checkbox">
                                    <label for="checkbox-conteudo7"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">7</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                        </tr>

                        <tr>
                            <td class="tabela-principal_checkbox">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo8" type="checkbox">
                                    <label for="checkbox-conteudo8"></label>
                                </div>
                            </td>
                            <td class="tabela-principal_id">8</td>
                            <td class="tabela-principal_conteudo">Produto aleatório</td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                            <td class="tabela-principal_conteudo"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php
        include('../imports.php');
        ?>
</body>

</html>