<?php
$page = 'categorias';
include '../../conexao.php';
include '../../verifica-logado.php';    

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
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/produtos/form-cadastro.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../../componentes/menu-cabecalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <form action="cadastroGravaCategoria.php" method="POST">
                    <div class="w-100">
                        <label class="input-texto">Nome da categoria</label>
                        <div class="input-container">
                            <button class="botao-input" disabled="">
                                <ion-icon class="icone-input md hydrated" name="pricetag-outline"></ion-icon>
                            </button>
                            <input class="input-conjunto input-tiktok" type="text" name="nomeCategoria">
                        </div>
                    </div>

                    <div class="input-salvar">
                        <button type="submit" class="botao-texto min-width-botao centralizar margem-topo">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php
        include('../../imports.php');
        ?>
</body>

</html>