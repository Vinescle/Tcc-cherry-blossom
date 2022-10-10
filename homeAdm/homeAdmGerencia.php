<?php
include '../conexao/conexao.php';
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
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/menuAdm.css" rel="stylesheet">
    <link href="../css/homeAdm/homeAdmGerencia.css" rel="stylesheet">  
    <title>Gerenciamento -- ADM</title>

    <style>
        .conteudo-principal {
            display: flex;
            flex-wrap: wrap;

            width: calc(100% - 107px);
            margin-left: 107px;
        }

        .main {
            display: flex;
            flex-direction: column;
            gap: 0px;

            width: 100%;
            padding: 0 40px;
        }

        .icone-selecionado {
            background-color: #EC55D9;
            color: #FFFFFF;
        }

        .conteudo-acoes {
            margin-top: 2rem;
        }
    </style>
</head>

<body>
        <?php include '../Componentes/cabecalhoHomeAdm.php'; ?>
    <div style="display: flex;">
        <?php include '../Componentes/menuAdm.php'; ?>
    </div>
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
                                <a class="botao-texto" href="./produto/formCadastroProduto.php">
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
                    <a>
                        <ion-icon class="setas" name="chevron-back-outline"></ion-icon>
                    </a>
                    <a>
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

    </main>
    <input type="text" value="2" id="pagina-verificacao" style="display:none;">

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>