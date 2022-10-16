<?php
$page = 'encomendas';
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
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/encomendas.css" rel="stylesheet">

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
                <div class="card-detalhes">
                    <div class="detalhes-principais">
                        <div class="secoes-detalhes-checkbox">
                            <div>
                                <label class="titulo-label">Concluído</label>
                            </div>

                            <div class="tabela-checkbox_titulo">
                                <input id="checkbox-titulo" type="checkbox">
                                <label for="checkbox-titulo"></label>
                            </div>
                        </div>

                        <div class="secoes-detalhes-principais">
                            <label class="titulo-label">Número</label>
                            <p class="texto-detalhes">#0987654321</p>
                        </div>

                        <div class="secoes-detalhes-principais">
                            <label class="titulo-label">Data</label>
                            <p class="texto-detalhes">01/10/2022</p>
                        </div>

                        <div class="secoes-detalhes-principais">
                            <label class="titulo-label">Total</label>
                            <p class="texto-detalhes">R$10,50</p>
                        </div>

                        <div class="secoes-detalhes-principais detalhes">
                            <label class="label-detalhes" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Detalhes</label>
                        </div>
                    </div>

                    <div class="detalhes-extras collapse" id="collapseExample">
                        <div class="detalhes-produto">
                            <div class="produtos-comprados">
                                <div class="div-compras">
                                    <label class="titulo-label">Produtos</label>
                                    <label class="titulo-label">Valor</label>
                                </div>
                                <div class="div-compras">
                                    <p class="texto-detalhes">2x Pulseira Verde Pet</p>
                                    <p class="texto-detalhes">R$20,00</p>
                                </div>
                                <div class="div-compras">
                                    <p class="texto-detalhes">1x Pulseira Verde Pet</p>
                                    <p class="texto-detalhes">R$1020,00</p>
                                </div>
                                <div class="div-total">
                                    <label class="titulo-label">Total: </label>
                                    <p class="texto-detalhes">R$100.020</p>
                                </div>
                            </div>
                        </div>
                        <div class="detalhes-endereco">
                            <div>
                                <label class="titulo-label">Endereço (Número, rua, bairro, cidade, estado, CEP)</label>
                                <p class="texto-detalhes">Anna Santelli Martiore</p>
                                <p class="texto-detalhes">654, Rua Ciclano, Monte Castelo, Tubarão, SC, XXXXX-XXX </p>
                            </div>
                            <div class="div-frete">
                                <label class="titulo-label">Frete: R$10,00</label>
                            </div>
                        </div>
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