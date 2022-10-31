<?php
if (empty($carregado)) {
    include '../../conexao.php';
    include '../../verifica-logado.php';
}

?>

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
    <?php
    $value = 0;
    if (!empty($_SESSION['carrinho'])) {

        foreach ($_SESSION['carrinho'] as $key => $produtoCarrinho) {
            $sqlProduto = "SELECT * FROM tb_produtos a INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria WHERE id_produtos = $produtoCarrinho[produto] LIMIT 1";

            $sqlImagens = "SELECT * FROM tb_imagem_produtos WHERE fk_id_produto = $produtoCarrinho[produto] LIMIT 1";


            $resultadoProduto = mysqli_query($conexao, $sqlProduto);
            $resultadoImagens = mysqli_query($conexao, $sqlImagens);

            $imagens = $resultadoImagens->fetch_all(MYSQLI_ASSOC)[0];
            $produto = $resultadoProduto->fetch_all(MYSQLI_ASSOC)[0];
            $value += $produtoCarrinho['quantidade'] * $produto['preco_produto'];
    ?>
            <div class="produto-dados">
                <div class="produtos">
                    <div class="produto-imagemNome">
                        <img class="imagem-produto" src="<?php echo $rota; ?>/assets/imagens/storage/produtos/<?php echo $imagens['url'] ?>">
                        <label class="produto-label"><?php echo $produto['nome_produto'] ?></label>
                    </div>

                    <div class="produto-quantidade">
                        <ion-icon style="cursor: pointer;" onclick="reduzQuantidade(<?php echo $produtoCarrinho['produto'] ?>)" name="remove-outline"></ion-icon>
                        <label class="produto-label"><?php echo $produtoCarrinho['quantidade'] ?></label>
                        <ion-icon style="cursor: pointer;" onclick="adicionaQuantidade(<?php echo $produtoCarrinho['produto'] ?>)" name="add-outline"></ion-icon>
                    </div>

                    <div class="produto-preco">
                        <label class="produto-label"><?php echo $produtoCarrinho['quantidade'] ?> x R$<?php echo number_format($produto['preco_produto'], 2, ",", "."); ?></label>
                        <label class="produto-label">Total: R$<?php echo number_format($produtoCarrinho['quantidade'] * $produto['preco_produto'], 2, ",", "."); ?></label>
                    </div>

                    <div class="produto-apagar">
                        <ion-icon name="trash-outline" style="cursor: pointer;" onclick="deletaProduto(<?php echo $produtoCarrinho['produto'] ?>)"></ion-icon>
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        echo "Carrinho vazio";
    }
    ?>
    <div class="total">
        <div style="width: 80%;">
        </div>
        <input type="number" id="total-carrinho" value="<?php echo $value ?>" hidden>
        <div class="total-label">
            <?php
            if (!empty($_SESSION['carrinho'])) {
                echo "<label id='preco-total-exibicao' class='produto-label'>Total: R$" . number_format($value, 2, ",", ".") . "</label>";
            } else {
                echo "<label class='produto-label'>Total: Carrinho vazio!</label>";
            }
            ?>

        </div>
    </div>
</div>