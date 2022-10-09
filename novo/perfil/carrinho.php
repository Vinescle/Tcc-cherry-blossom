<?php
$page = 'home';
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
    <link href="<?php echo $rota; ?>/assets/css/pages/perfil/carrinho.css" rel="stylesheet">
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
        include('../componentes/menu-lateral-usuario.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">

                <div class="agrupamento">
                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Frete</label>
                    </div>

                    <div class="conjunto-dadosBasicos espacamento-enderecos espaco-entre">
                        <div class="conjunto-divs">
                            <div class="conjunto-label-input">
                                <label class="input-texto">CEP</label>
                            </div>

                            <div class="input-container input-tamanho ">
                                <button class="botao-input">
                                    <ion-icon class="icone-input" name="map-outline"></ion-icon>
                                </button>
                                <input class="input-conjunto cantos-quadrados" type="text" name="nomeProduto">
                                <div class="icon-input-final background-ok" style="cursor:pointer;">
                                    <label class="icone-label">OK</label>
                                </div>
                            </div>
                        </div>

                        <div class="enderecos">
                            <div class="center">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo1" type="checkbox">
                                    <label for="checkbox-conteudo1" class="center"></label>
                                </div>
                                <label class="texto-label">R$ 21,58 - Correios PAC (1 a 8 dias úteis)</label>
                            </div>

                            <div class="center">
                                <div class="tabela-checkbox_conteudo">
                                    <input id="checkbox-conteudo2" type="checkbox">
                                    <label for="checkbox-conteudo2" class="center"></label>
                                </div>
                                <label class="texto-label">R$ 21,58 - SEDEX (1 a 8 dias úteis)</label>
                            </div>
                        </div>
                    </div>

                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Produtos</label>
                    </div>

                    <div class="conjunto-dadosBasicos">
                        <div class="div-pedidos">
                            <div class="cabecalho-pedidos">
                                <div style="width: 40%; display: flex; justify-content: center;">
                                    <label class="texto-label">Nome</label>
                                </div>
                                <div style="width: 20%; display: flex; justify-content: center;">
                                    <label class="texto-label">Quantidade</label>
                                </div>

                                <div style="width: 20%; display: flex; justify-content: center;">
                                    <label class="texto-label">Preço</label>
                                </div>

                                <div style="width: 20%; display: flex; justify-content: center;">
                                </div>
                            </div>

                            <div class="produto-dados">
                                <div class="produtos">
                                    <div class="produto-imagemNome">
                                        <div class="imagem-produto">
                                            <img src="../../imagens/site/teemo.jpg">
                                        </div>
                                        <label class="produto-label">Teemo Vesgo</label>
                                    </div>

                                    <div class="produto-quantidade">
                                        <ion-icon name="remove-outline"></ion-icon>
                                        <label class="produto-label">22</label>
                                        <ion-icon name="add-outline"></ion-icon>
                                    </div>

                                    <div class="produto-preco">
                                        <label class="produto-label">22 x R$1.000</label>
                                        <label class="produto-label">Total: R$22.000</label>
                                    </div>

                                    <div class="produto-apagar">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </div>
                                </div>
                            </div>

                            <div class="produto-dados">
                                <div class="produtos">
                                    <div class="produto-imagemNome">
                                        <div class="imagem-produto">
                                            <img src="../../imagens/site/yasuo.png">
                                        </div>
                                        <label class="produto-label">Yasuo Burro</label>
                                    </div>

                                    <div class="produto-quantidade">
                                        <ion-icon name="remove-outline"></ion-icon>
                                        <label class="produto-label">10</label>
                                        <ion-icon name="add-outline"></ion-icon>
                                    </div>

                                    <div class="produto-preco">
                                        <label class="produto-label">10 x R$2.000</label>
                                        <label class="produto-label">Total: R$20.000</label>
                                    </div>

                                    <div class="produto-apagar">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </div>
                                </div>
                            </div>

                            <div class="total">
                                <div style="width: 80%;">
                                </div>

                                <div class="total-label">
                                    <label class="produto-label">Total: R$42.021,58</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-salvar">
                        <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                            Continuar
                        </button>
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