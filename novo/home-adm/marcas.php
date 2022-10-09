<?php
$page = 'marcas';
include '../conexao.php';
$sql = "SELECT * FROM tb_marcas";
$resultado = mysqli_query($conexao, $sql);
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
                                <div class="botao-icone">
                                    <a href="<?php echo $rota; ?>/home-adm/marcas/form-cadastro.php" class="botao-texto">
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
                            <ion-icon class="setas md hydrated" name="chevron-back-outline" role="img" aria-label="chevron back outline"></ion-icon>
                        </a>
                        <a class="botao-texto">
                            <ion-icon class="setas md hydrated" name="chevron-forward-outline" role="img" aria-label="chevron forward outline"></ion-icon>
                        </a>
                    </div>
                </div>

            </div>

            <div class="marcas">
                <?php
                try {
                    while ($resultadoBolas = mysqli_fetch_array($resultado)) {
                ?>
                        <div class="marca-bolas">
                            <div class="marca-circulo" style="background-color:<?php echo $resultadoBolas['cor_marca']; ?>">
                                <div><img src="<?php echo $rotaAntigaTeste; ?>/imagemBancoDeDados/marcas/<?php echo $resultadoBolas['icon_url']; ?>" class="imagem-marcas"></div>
                            </div>
                        </div>
                <?php
                    }
                } catch (Exception $e) {
                    // Fazer o tratamento de warning
                }
                ?>

            </div>
        </div>
    </div>

    <?php
    include('../imports.php');
    ?>
</body>

</html>