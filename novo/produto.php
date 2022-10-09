<?php
include './conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/produto/produto.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/rodape.css" rel="stylesheet">


    <title>Cherry Blossom - Home</title>
</head>

<body>
    <?php
    include('./componentes/menu-cabeçalho.php');
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="div-tag">
                <div class="texto-tag">Hama Beads > Chaveiros</div>
            </div>

            <div class="produto-conteudo">
                <div class="produto-imagens">

                </div>

                <div class="produto-dados">
                    <div class="div-tituloProduto">
                        <label class="titulo-produto">Chaveiro Palhaçu</label>

                        <div class="conjunto-estatisticas">
                            <label class="texto-estatisticas">0.0</label>
                            <label class="texto-estatisticas">XX Avaliações</label>
                            <label class="texto-estatisticas">XX Vendidos</label>
                        </div>
                    </div>

                    <div class="conjunto-precos">
                        <div class="precos">
                            <div>
                                <label>R$2.000,00</label>
                            </div>

                            <div>
                                <label>RS$1.000,00</label>
                            </div>
                        </div>

                        <label>Em 10x R$100,00 (Sem juros)</label>
                    </div>

                    <div>
                        <label>Calcule o Frete:</label>
                        <div>
                            <input type="text" value="Insira um CEP">
                            <button>Confirmar</button>
                        </div>
                    </div>

                    <div>
                        <label>Quantidade</label>

                        <div>
                            <!-- Ionicon -->
                            <label>22</label>
                            <!-- Ionicon -->
                        </div>
                    </div>

                    <div>
                        <button>Adicionar ao Carrinho</button>

                        <button>Comprar</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php
    include('./componentes/rodape.php');
    ?>

    <?php
    include('./imports.php');
    ?>
</body>

</html>