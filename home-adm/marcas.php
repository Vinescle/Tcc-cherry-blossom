<?php


$page = 'marcas';
$limit = 0;
if (isset($pagina) || isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
    if ($pagina < 0) {
        header('location:../home-adm/marcas.php');
    }
    $limit = $limit + 32;
} else {
    $pagina = 0;
}

include '../conexao.php';
include '../verifica-logado.php';
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
    <link href="<?php echo $rota; ?>/assets/css/componentes/marcas.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/marcas.css" rel="stylesheet">

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
                                <div class="botao-icone" style="cursor:pointer;">
                                    <a href="<?php echo $rota; ?>/home-adm/marcas/form-cadastro.php" class="botao-texto">
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
                        <a class="botao-texto" href="./marcas.php?pagina=<?php echo $pagina - 1 ?>">
                            <ion-icon class="setas md hydrated" name="chevron-back-outline" role="img" aria-label="chevron back outline"></ion-icon>
                        </a>
                        <a class="botao-texto" href="./marcas.php?pagina=<?php echo $pagina + 1 ?>">
                            <ion-icon class="setas md hydrated" name="chevron-forward-outline" role="img" aria-label="chevron forward outline"></ion-icon>
                        </a>
                    </div>
                </div>

            </div>
            <form action="./marcas/deletemarca.php" method="GET" id="form">
                <div class="marcas">
                    <?php
                    $sql = "SELECT * FROM tb_marcas LIMIT $limit,32";
                    $resultado = mysqli_query($conexao, $sql);

                    try {
                        while ($resultadoBolas = mysqli_fetch_array($resultado)) {
                    ?>
                            <input name="idcheckbox[]" class="marca-checkbox" type="checkbox" value="<?php echo $resultadoBolas['id_marca'] ?>" id="checkbox-<?php echo $resultadoBolas['id_marca'] ?>" hidden>
                            <label for="checkbox-<?php echo $resultadoBolas['id_marca'] ?>">
                                <div class="marca-bolas" >

                                    <div class="marca-circulo" style="background-color:<?php echo $resultadoBolas['cor_marca']; ?>">
                                        <div class="marca-overlay"></div>
                                        <label class="label-marca" for="checkbox-<?php echo $resultadoBolas['id_marca'] ?>">
                                            <?php echo $resultadoBolas['nome_marca'] ?>
                                        </label>
                                        <div>
                                            <img src="<?php echo $rota; ?>/assets/imagens/storage/marcas/<?php echo $resultadoBolas['icon_url']; ?>" class="imagem-marcas">
                                        </div>
                                    </div>
                                </div>
                            </label>
                    <?php
                        }
                    } catch (Exception $e) {
                        // Fazer o tratamento de warning
                    }
                    ?>

                </div>
            </form>
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
            form.action = "./marcas/deleteMarca.php";
            form.submit();

        }

        function altera() {
            form.action = "./marcas/form-altera.php";
            form.submit();
        }
    </script>

    <?php
    include('../imports.php');
    ?>
</body>

</html>