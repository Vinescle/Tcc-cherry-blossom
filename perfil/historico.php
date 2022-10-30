<?php
$page = 'historico';
include '../conexao.php';
include '../verifica-logado.php';

$sqlPedidos = "SELECT * FROM tb_usuario_pedido WHERE id_usuario = $_SESSION[id_usuario] ORDER BY id_usuario_pedido DESC";
$resultadoPedidos = mysqli_query($conexao, $sqlPedidos);

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
    <link href="<?php echo $rota; ?>/assets/css/pages/perfil/historico.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-lateral.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/index.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabecalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../componentes/menu-lateral-usuario.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">

                <?php
                while ($pedidos = mysqli_fetch_array($resultadoPedidos)) {
                    $sqlPedidoProduto = "SELECT * FROM tb_produto_pedido WHERE fk_id_pedido = $pedidos[id_usuario_pedido]";
                    $resultadoPedidoProduto = mysqli_query($conexao, $sqlPedidoProduto);

                    $data = DateTime::createFromFormat('Y-m-d H:i:s', $pedidos['data_pedido'])->format('Y/m/d H:i:s');

                ?>
                    <div class="card-detalhes">
                        <div class="detalhes-principais">
                            <div class="secoes-detalhes-principais">
                                <label class="titulo-label">Número</label>
                                <p class="texto-detalhes">#<?php echo $pedidos['id_usuario_pedido'] ?></p>
                            </div>

                            <div class="secoes-detalhes-principais">
                                <label class="titulo-label">Data</label>
                                <p class="texto-detalhes"><?php echo $data ?></p>
                            </div>
                            <div class="secoes-detalhes-principais">
                                <label class="titulo-label">Total</label>
                                <p class="texto-detalhes">R$<?php echo number_format(($pedidos['preco_total'] + $pedidos['preco_frete']), 2, ",", "."); ?></p>
                            </div>

                            <div class="secoes-detalhes-principais">
                                <label class="titulo-label">Status</label>
                                <?php
                                if (!empty($pedidos['data_confirmacao'])) {
                                    echo '<p class="texto-detalhes">CONFIRMADO</p>';
                                } else if (!empty($pedidos['data_cancelamento'])) {
                                    echo '<p class="texto-detalhes">CANCELADO</p>';
                                } else {
                                    echo '<p class="texto-detalhes">PROCESSANDO</p>';
                                }
                                ?>

                            </div>

                            <div class="secoes-detalhes-principais detalhes">
                                <label class="label-detalhes" data-bs-toggle="collapse" role="button" href="#produtos<?php echo $pedidos['id_usuario_pedido'] ?>" aria-expanded="false" aria-controls="produtos<?php echo $pedidos['id_usuario_pedido'] ?>">Detalhes</label>
                            </div>
                        </div>

                        <div class="detalhes-extras collapse" id="produtos<?php echo $pedidos['id_usuario_pedido'] ?>">
                            <div class="detalhes-produto">
                                <div class="produtos-comprados">
                                    <div class="div-compras">
                                        <label class="titulo-label">Produtos</label>
                                        <label class="titulo-label">Valor</label>
                                    </div>
                                    <?php
                                    while ($pedidoProduto = mysqli_fetch_array($resultadoPedidoProduto)) {
                                        $sqlProduto = "SELECT * FROM tb_produtos WHERE id_produtos = $pedidoProduto[id_produto]";
                                        $resultadoProduto = mysqli_query($conexao, $sqlProduto);

                                        while ($produto = mysqli_fetch_array($resultadoProduto)) {
                                    ?>
                                            <div class="div-compras">
                                                <p class="texto-detalhes"><?php echo $pedidoProduto['quantidade'] ?>x <?php echo $produto['nome_produto'] ?></p>
                                                <p class="texto-detalhes">R$<?php echo number_format($pedidoProduto['quantidade'] * $produto['preco_produto'], 2, ",", "."); ?> </p>
                                            </div>
                                    <?php
                                        }
                                    }

                                    ?>

                                </div>
                            </div>
                            <div class="detalhes-endereco">
                                <div class="div-frete">
                                    <label class="titulo-label">Frete:</label>
                                    <p class="texto-detalhes"> R$<?php echo $pedidos['frete']; ?></p>
                                </div>

                                <div class="div-total">
                                    <label class="titulo-label">Total: </label>
                                    <p class="texto-detalhes"> R$<?php echo number_format(($pedidos['preco_total'] + $pedidos['preco_frete']), 2, ",", "."); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
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