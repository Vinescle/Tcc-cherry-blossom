<?php
$page = 'categorias';
include '../conexao.php';

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
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/categorias.css" rel="stylesheet">

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
                                        <a class="botao-texto" href="<?php echo $rota; ?>/home-adm/categorias/form-cadastro.php">
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
                            <a class="botao-texto">
                                <ion-icon class="setas" name="chevron-back-outline"></ion-icon>
                            </a>
                            <a class="botao-texto">
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
                            <td class="tabela-principal_conteudo">
                                Papercraft
                                <ion-icon class="seta-abreCategorias" name="chevron-forward-outline"></ion-icon>
                            </td>
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
                                        <a class="botao-texto" href="<?php echo $rota; ?>/home-adm/sub-categorias/form-cadastro.php">
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
                            <a class="botao-texto">
                                <ion-icon class="setas" name="chevron-back-outline"></ion-icon>
                            </a>
                            <a class="botao-texto">
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
    </div>

    <?php
    include('../imports.php');
    ?>
</body>

</html>