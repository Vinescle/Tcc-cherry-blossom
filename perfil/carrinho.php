<?php
$page = 'carrinho';
include '../conexao.php';
include '../verifica-logado.php';
session_start();
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

                    <div class="conjunto-dadosBasicos" id="carrinho-container">

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
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        const containerProdutosCarrinho = document.querySelector("#carrinho-container");

        async function setaCarrinho() {
            const response = await axios.get("<?php echo $rota ?>/api/carrinho/index.php");
            containerProdutosCarrinho.innerHTML = response.data;
        }
        setaCarrinho();

        async function reduzQuantidade(id) {
            const response = await axios.get(`<?php echo $rota ?>/api/carrinho/reduzQuantidade.php?id=${id}`);
            containerProdutosCarrinho.innerHTML = response.data;
        }

        async function adicionaQuantidade(id) {
            const response = await axios.get(`<?php echo $rota ?>/api/carrinho/adicionaQuantidade.php?id=${id}`);
            containerProdutosCarrinho.innerHTML = response.data;
        }

        async function deletaProduto(id) {
            const response = await axios.get(`<?php echo $rota ?>/api/carrinho/deletaProduto.php?id=${id}`);
            containerProdutosCarrinho.innerHTML = response.data;
        }
    </script>
</body>

</html>