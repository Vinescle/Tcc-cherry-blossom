<?php
$page = 'home';
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
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/index.css" rel="stylesheet">

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
            <div class="dados">
                <div class="dados-tabelas">
                    <div class="tabela">
                        <h3 class="tabela-numero">XX.XXX</h3>
                        <p class="tabela-titulo">Visitas</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem">XXX</p>
                        </div>
                    </div>

                    <div class="tabela">
                        <h3 class="tabela-numero">X.XXX</h3>
                        <p class="tabela-titulo">Vendas</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem">XXX</p>
                        </div>
                    </div>

                    <div class="tabela">
                        <h3 class="tabela-numero">R$X.XXX</h3>
                        <p class="tabela-titulo">Lucros</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem">XXX</p>
                        </div>
                    </div>

                    <div class="tabela">
                        <h3 class="tabela-numero">XXX</h3>
                        <p class="tabela-titulo">Inscritos</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem">XXX</p>
                        </div>
                    </div>
                </div>

                <div class="dados-graficos">
                    <div class="grafico">

                    </div>

                    <div class="grafico">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../imports.php');
    ?>
</body>

</html>