<?php
$page = 'categorias';
$limit = 0;
if (isset($pagina) || isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
    if ($pagina < 0) {
        header('location:../home-adm/categorias.php');
    }
    $limit = 4 * $pagina;
} else {
    $pagina = 0;
}

include '../conexao.php';
include '../verifica-logado.php';
$sqlCategorias = "SELECT * FROM tb_categoria LIMIT $limit,4";
$resultadoCategoria = mysqli_query($conexao, $sqlCategorias);

if (isset($_GET['id_categoria'])) {
    $subLimit = 0;
    $idsubcategoria = $_GET['id_categoria'];
    $sqlsubCategorias = "SELECT * FROM tb_sub_categoria a INNER JOIN tb_categoria b ON a.fk_id_categoria = b.id_categoria WHERE b.id_categoria = $idsubcategoria LIMIT $subLimit,4";
    $resultadoSubCategoria = mysqli_query($conexao, $sqlsubCategorias);
} else {
    $sqlsubCategorias = "SELECT * FROM tb_sub_categoria";
    $resultadoSubCategoria = mysqli_query($conexao, $sqlsubCategorias);
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

                                    <div class="botao-icone" onclick="alteraCategoria()">
                                        <a class="botao-texto">
                                            <ion-icon name="brush-outline"></ion-icon>
                                        </a>
                                    </div>

                                    <div class="botao-icone" onclick="excluirCategoria()">
                                        <a class="botao-texto">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="botoes-setas">
                            <a class="botao-texto" href="./categorias.php?pagina=<?php echo $pagina - 1 ?>">
                                <ion-icon class="setas" name="chevron-back-outline"></ion-icon>
                            </a>
                            <a class="botao-texto" href="./categorias.php?pagina=<?php echo $pagina + 1 ?>">
                                <ion-icon class="setas" name="chevron-forward-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <form id="formCategoria" action="./categorias/deletaCategorias.php" method="GET">
                        <table class="tabela-principal">
                            <tr>
                                <th class="tabela-principal_titulo">
                                    <div class="tabela-checkbox_titulo">
                                        <input onclick="clickCategoria(this)" id="checkbox-titulo" type="checkbox">
                                        <label for="checkbox-titulo"></label>
                                    </div>
                                </th>
                                <th class="tabela-principal_titulo tabela-principal_tituloId">ID</th>
                                <th class="tabela-principal_titulo tabela-principal_tituloProduto">Categorias</th>
                            </tr>

                            <?php while ($resultado = mysqli_fetch_array($resultadoCategoria)) {
                            ?>
                                <td class="tabela-principal_checkbox">
                                    <div class="tabela-checkbox_conteudo">
                                        <input name="idCategoria[]" value="<?php echo $resultado['id_categoria']; ?>" id="checkbox-conteudo-cat<?php echo $resultado['id_categoria']; ?>" type="checkbox">
                                        <label for="checkbox-conteudo-cat<?php echo $resultado['id_categoria']; ?>"></label>
                                    </div>
                                </td>
                                <td class="tabela-principal_id"><?php echo $resultado['id_categoria'] ?></td>
                                <td class="tabela-principal_conteudo">
                                    <?php echo $resultado['nome_categoria'] ?>
                                    <a href="./categorias.php?pagina=<?php echo $pagina ?>&id_categoria=<?php echo $resultado['id_categoria'] ?>">
                                        <ion-icon class="seta-abreCategorias" name="chevron-forward-outline"></ion-icon>
                                    </a>
                                </td>
                                </tr>
                            <?php
                            } ?>
                            <tr>
                        </table>
                    </form>
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

                                    <div class="botao-icone" onclick="alteraSubCategoria()">
                                        <a class="botao-texto">
                                            <ion-icon name="brush-outline"></ion-icon>
                                        </a>
                                    </div>

                                    <div class="botao-icone" onclick="excluirSubCategoria()">
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
                    <form id="formSubCategoria" action="./categorias/deletaCategorias.php" method="GET">
                        <table class="tabela-principal">
                            <tr>
                                <th class="tabela-principal_titulo">
                                    <div class="tabela-checkbox_titulo">
                                        <input onclick="clickSubCategoria(this)" id="checkbox-titulo-sub-cat" type="checkbox">
                                        <label for="checkbox-titulo-sub-cat"></label>
                                    </div>
                                </th>
                                <th class="tabela-principal_titulo tabela-principal_tituloId">ID</th>
                                <th class="tabela-principal_titulo tabela-principal_tituloProduto">Subcategorias</th>
                            </tr>

                            <?php while ($resultadofinal = mysqli_fetch_array($resultadoSubCategoria)) {
                            ?>
                                <tr>
                                    <td class="tabela-principal_checkbox">
                                        <div class="tabela-checkbox_conteudo">
                                            <input name="idSubCategoria[]" class="checkbox-subcategoria" value="<?php echo $resultadofinal['id_sub_categoria']; ?>" id="checkbox-conteudo-sub<?php echo $resultadofinal['id_sub_categoria']; ?>" type="checkbox">
                                            <label for="checkbox-conteudo-sub<?php echo $resultadofinal['id_sub_categoria']; ?>"></label>
                                        </div>
                                    </td>
                                    <td class="tabela-principal_id"><?php echo $resultadofinal['id_sub_categoria'] ?></td>
                                    <td class="tabela-principal_conteudo"><?php echo $resultadofinal['nome_sub_categoria'] ?></td>
                                </tr>
                            <?php
                            } ?>


                        </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        const formSubCategoria = document.querySelector('#formSubCategoria');
        const formCategoria = document.querySelector('#formCategoria');

        function excluirCategoria() {
            formCategoria.action = "./categorias/deletaCategorias.php";
            formCategoria.submit();
        }

        function alteraCategoria() {
            formCategoria.action = "./categorias/form-cadastro.php";
            formCategoria.submit();
        }

        function excluirSubCategoria() {
            formSubCategoria.action = "./sub-categorias/deletaSubCategorias.php";
            formSubCategoria.submit();
        }

        function alteraSubCategoria() {
            formSubCategoria.action = "./sub-categorias/form-cadastro.php";
            formSubCategoria.submit();
        }


        function clickSubCategoria(source) {
            var checkboxesSubCategoria = document.querySelectorAll('.checkbox-subcategoria');
            for (var i = 0; i < checkboxesSubCategoria.length; i++) {
                if (checkboxesSubCategoria[i] != source)
                    checkboxesSubCategoria[i].checked = source.checked;
            }
        }

        function clickCategoria(source) {
            var checkboxesCategoria = document.querySelectorAll('.checkbox-categoria');
            for (var i = 0; i < checkboxesCategoria.length; i++) {
                if (checkboxesCategoria[i] != source)
                    checkboxesCategoria[i].checked = source.checked;
            }
        }
    </script>

    <?php
    include('../imports.php');
    ?>
</body>

</html>