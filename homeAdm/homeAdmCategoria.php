<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry Blossom - Adm</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/menuAdm.css" rel="stylesheet">
    <link href="../css/homeAdm/homeAdmCategoria.css" rel="stylesheet">

    <style>
        .icone-selecionado {
            background-color: #EC55D9;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <?php
    include '../Componentes/cabecalhoHomeAdm.php';
    ?>
    <div class="conteudo-principal">
        <div style="display: flex;">
            <?php include '../Componentes/menuAdm.php'; ?>
        </div>

        <div class="conjunto-tabela-filtro">
            <div class="filtros">
                <div class="conjunto-filtro-botoes">
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
                                <a class="botao-texto">
                                    <ion-icon name="add-outline"></ion-icon>
                                </a>
                            </div>

                            <div class="botao-icone">
                                <a class="botao-texto">
                                    <ion-icon name="brush-outline"></ion-icon>
                                </a>
                            </div>

                            <div class="botao-icone">
                                <a class="botao-texto">
                                    <ion-icon name="trash-outline"></ion-icon>
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

            <table class="tabela-principal">
                <tr>
                    <th class="tabela-principal_titulo">
                        <div class="tabela-checkbox_titulo">
                            <input id="checkbox-titulo" type="checkbox">
                            <label for="checkbox-titulo"></label>
                        </div>
                    </th>
                    <th class="tabela-principal_titulo tabela-principal_tituloId">ID</th>
                    <th class="tabela-principal_titulo tabela-principal_tituloProduto">Categorias</th>
                </tr>

                <tr>
                    <td class="tabela-principal_checkbox">
                        <div class="tabela-checkbox_conteudo">
                            <input id="checkbox-conteudo1" type="checkbox">
                            <label for="checkbox-conteudo1"></label>
                        </div>
                    </td>
                    <td class="tabela-principal_id">1</td>
                    <td class="tabela-principal_conteudo">Papercraft</td>
                </tr>

                <tr>
                    <td class="tabela-principal_checkbox">
                        <div class="tabela-checkbox_conteudo">
                            <input id="checkbox-conteudo2" type="checkbox">
                            <label for="checkbox-conteudo2"></label>
                        </div>
                    </td>
                    <td class="tabela-principal_id">2</td>
                    <td class="tabela-principal_conteudo">Hama Beads</td>
                </tr>

                <tr>
                    <td class="tabela-principal_checkbox">
                        <div class="tabela-checkbox_conteudo">
                            <input id="checkbox-conteudo3" type="checkbox">
                            <label for="checkbox-conteudo3"></label>
                        </div>
                    </td>
                    <td class="tabela-principal_id">3</td>
                    <td class="tabela-principal_conteudo">Macramê</td>
                </tr>

                <tr>
                    <td class="tabela-principal_checkbox">
                        <div class="tabela-checkbox_conteudo">
                            <input id="checkbox-conteudo4" type="checkbox">
                            <label for="checkbox-conteudo4"></label>
                        </div>
                    </td>
                    <td class="tabela-principal_id">4</td>
                    <td class="tabela-principal_conteudo">Miçangas</td>
                </tr>
            </table>

            <div class="conjunto-tabela-filtro">
                <div class="filtros">
                    <div class="conjunto-filtro-botoes">
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
                                    <a class="botao-texto">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </a>
                                </div>

                                <div class="botao-icone">
                                    <a class="botao-texto">
                                        <ion-icon name="brush-outline"></ion-icon>
                                    </a>
                                </div>

                                <div class="botao-icone">
                                    <a class="botao-texto">
                                        <ion-icon name="trash-outline"></ion-icon>
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

                <table class="tabela-principal">
                    <tr>
                        <th class="tabela-principal_titulo">
                            <div class="tabela-checkbox_titulo">
                                <input id="checkbox-titulo" type="checkbox">
                                <label for="checkbox-titulo"></label>
                            </div>
                        </th>
                        <th class="tabela-principal_titulo tabela-principal_tituloId">ID</th>
                        <th class="tabela-principal_titulo tabela-principal_tituloProduto">Subcategorias</th>
                    </tr>

                    <tr>
                        <td class="tabela-principal_checkbox">
                            <div class="tabela-checkbox_conteudo">
                                <input id="checkbox-conteudo1" type="checkbox">
                                <label for="checkbox-conteudo1"></label>
                            </div>
                        </td>
                        <td class="tabela-principal_id">1</td>
                        <td class="tabela-principal_conteudo">Animais</td>
                    </tr>

                    <tr>
                        <td class="tabela-principal_checkbox">
                            <div class="tabela-checkbox_conteudo">
                                <input id="checkbox-conteudo2" type="checkbox">
                                <label for="checkbox-conteudo2"></label>
                            </div>
                        </td>
                        <td class="tabela-principal_id">2</td>
                        <td class="tabela-principal_conteudo">Jogos</td>
                    </tr>

                    <tr>
                        <td class="tabela-principal_checkbox">
                            <div class="tabela-checkbox_conteudo">
                                <input id="checkbox-conteudo3" type="checkbox">
                                <label for="checkbox-conteudo3"></label>
                            </div>
                        </td>
                        <td class="tabela-principal_id">3</td>
                        <td class="tabela-principal_conteudo">Séries</td>
                    </tr>

                    <tr>
                        <td class="tabela-principal_checkbox">
                            <div class="tabela-checkbox_conteudo">
                                <input id="checkbox-conteudo4" type="checkbox">
                                <label for="checkbox-conteudo4"></label>
                            </div>
                        </td>
                        <td class="tabela-principal_id">4</td>
                        <td class="tabela-principal_conteudo">Animes</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <input type="text" value="3" id="pagina-verificacao" style="display:none;">

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>