<?php
include './conexao.php';

$idProduto = $_GET['produto'];

$insertProdutoDestaque = "INSERT INTO tb_produto_popular (fk_id_produto) VALUES ($idProduto);";
mysqli_query($conexao, $insertProdutoDestaque);

$cep = !empty($_GET['cep']) ? $_GET['cep'] : null;

if (isset($_GET['adicionar'])) {
    //Adicionando ao carrinho
    $_SESSION['carrinho'][$idProduto] = array(
        'produto' => $_GET['produto'],
        'quantidade' => intval($_GET['quantidade'])
    );
    echo "<script>alert('O produto foi adicionado ao carrinho!'); window.location.href = '$rota/produto.php?produto=$idProduto'</script>";
}


$sqlProduto = "SELECT * FROM tb_produtos a INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria WHERE id_produtos = $idProduto LIMIT 1";

$sqlImagens = "SELECT * FROM tb_imagem_produtos WHERE fk_id_produto = $idProduto";

$sqlMarcas = "SELECT * FROM tb_marcas_produtos d INNER JOIN tb_marcas e ON e.id_marca = d.fk_id_marcas WHERE d.fk_id_produtos = $idProduto";

$resultadoProduto = mysqli_query($conexao, $sqlProduto);
$resultadoImagens = mysqli_query($conexao, $sqlImagens);
$resultadoMarcas = mysqli_query($conexao, $sqlMarcas);

$imagens = $resultadoImagens->fetch_all(MYSQLI_ASSOC);
$marcas = $resultadoMarcas->fetch_all(MYSQLI_ASSOC);
$produto = $resultadoProduto->fetch_all(MYSQLI_ASSOC)[0];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/produto.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/rodape.css" rel="stylesheet">


    <title>Cherry Blossom - Home</title>
</head>

<body>
    <?php
    include('./componentes/menu-cabecalho.php');
    ?>

    <main>
        <div class="container-loja">
            <div class="div-tag">
                <div class="texto-tag"><?php echo $produto['nome_categoria'] ?> > <?php echo $produto['nome_sub_categoria'] ?></div>
            </div>
            <div class="produto-conteudo">
                <div class="produto-imagens">

                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $i = 0;
                            foreach ($imagens as $imagem) {
                            ?>
                                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                                    <img src="<?php echo $rota . '/assets/imagens/storage/produtos/' . $imagem['url']; ?>" class="d-block w-100 quadrado-imagem arredonda-borda" alt="..." />
                                </div>
                            <?php
                                $i++;
                            }
                            ?>
                            <?php
                            if (!empty($produto['visualizacao_url'])) {
                                echo "<button class='botao-3d botao-texto' data-bs-toggle='modal' data-bs-target='#modal-vizualizacao'>3D</button>";
                            }
                            ?>

                        </div>
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators w-100">
                            <?php
                            $i = 0;
                            foreach ($imagens as $imagem) {
                            ?>
                                <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="<?php echo $i; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $i; ?>" style="width: 100px;">
                                    <img class="d-block w-100 quadrado-imagem arredonda-borda" src="<?php echo $rota . '/assets/imagens/storage/produtos/' . $imagem['url'] ?>" class="img-fluid" />
                                </button>
                            <?php
                                $i++;
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="produto-dados">
                    <div class="div-tituloProduto">
                        <label class="titulo-produto"><?php echo $produto['nome_produto'] ?></label>

                        <div class="conjunto-estatisticas">
                            <label class="texto-estatisticas">XX Vendidos</label>
                        </div>
                    </div>

                    <div class="conjunto-precos">
                        <?php
                        if ($produto['preco_fora_promocao'] == null || $produto['preco_fora_promocao'] == 0) {
                        ?>
                            <div class="precos">
                                <label></label>
                                <div>
                                    <label class="preco-promocional">R$<?php echo number_format($produto['preco_produto'], 2, ",", ".") ?></label>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="precos">
                                <label><s>R$<?php echo number_format($produto['preco_fora_promocao'], 2, ",", ".") ?></s></label>
                                <div>
                                    <label class="preco-promocional">R$<?php echo number_format($produto['preco_produto'], 2, ",", ".") ?></label>
                                </div>
                            </div>
                        <?php
                        }
                        ?>


                        <label class="texto-parcela">Em 10x R$<?php echo number_format($produto['preco_produto'] / 10, 2, ",", ".") ?> (Sem juros)</label>
                    </div>

                    <div class="conjunto-input-frete">
                        <label>Calcule o Frete:</label>
                        <div class="flex">
                            <div class="cep-container margem-direita">
                                <input type="text" class="limpa-style" id="frete-input" placeholder="Insira um CEP" maxlength="8">
                                <button class="botao-texto min-width-botao centralizar" onclick="calcularFrete()">Confirmar</button>
                            </div>
                            <div class="cep-container" id="cep-container" style="display: none;">
                                <select name="cep_escolhido" id="cep_escolhido" class="limpa-borda">

                                </select>
                            </div>
                        </div>
                    </div>
                    <form action="./produto.php" method="GET">
                        <input type="text" hidden value="<?php echo $produto['id_produtos'] ?>" name="produto">
                        <input type="text" hidden value="1" name="adicionar">
                        <div class="margem-topo">
                            <label>Quantidade</label>

                            <div class="quantidade-container">
                                <button type="button" class="limpa-style modificar-quantidade" onclick="diminui()">
                                    <ion-icon name="remove-outline"></ion-icon>
                                </button>
                                <input type="number" name="quantidade" class="limpa-style quantidade" value="1" id="quantidade" min="1">
                                <button type="button" class="limpa-style modificar-quantidade" onclick="aumenta()">
                                    <ion-icon name="add-outline"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="flex-esquerda margem-topo container-compra">
                            <button type="submit" class="botao-texto min-width-botao margem-direita">
                                <ion-icon class="icone-input md hydrated" name="cart-outline"></ion-icon>Adicionar ao Carrinho
                            </button>
                            <button type="button" class="botao-texto min-width-botao">
                                <ion-icon class="icone-input md hydrated" name="card-outline"></ion-icon>Comprar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div>
            </div>
            <div>
                <span class="titulo-descricao">Descrição: </span>
                <p>
                    <?php echo $produto['descricao_produto'] ?>
                </p>
                <span class="titulo-descricao">Marca:
                    <?php
                    foreach ($marcas as $marca) {
                        echo $marca['nome_marca'];
                    }
                    ?>
                </span>

            </div>
        </div>
        <?php
        if (!empty($produto['visualizacao_url'])) {
        ?>
            <div class="modal" id="modal-vizualizacao" tabindex="-1" aria-labelledby="modal-vizualizacao" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-dialog flex-centro">
                        <div class="modal-content">
                            <div class="popup-3d-view">
                                <button class="popup-icone-close fechar-modal-3d" data-bs-dismiss="modal" aria-label="Close">
                                    <ion-icon id='fechar' name="close-outline"></ion-icon>
                                </button>

                                <div class="popup-config">

                                    <iframe style="width: 100%; aspect-ratio: 1/1; border-radius: 30px;" src="<?php echo $produto['visualizacao_url'] ?>" frameborder="0"></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </main>

    <?php
    include('./componentes/rodape.php');
    ?>
    <?php
    include('./imports.php');
    ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <script>
        const quantidade = document.querySelector('#quantidade');

        function aumenta() {
            quantidade = quantidade.value++;
        }

        function diminui() {
            if (quantidade.value > 1)
                quantidade = quantidade.value--;
        }

        async function calcularFrete() {
            const cep = document.querySelector('#frete-input').value;
            const fretes = await axios.get("<?php echo $rota ?>/api/carrinho/calcula-frete.php?peso=<?php echo $produto['peso_produto'] ?>&valor=<?php echo $produto['preco_produto'] ?>&altura=<?php echo $produto['altura_produto'] ?>&largura=<?php echo $produto['largura_produto'] ?>&comprimento=<?php echo $produto['profundidade_produto'] ?>&cep=" + cep)

            const cepContainer = document.querySelector('#cep-container');
            const cepSelect = cepContainer.querySelector("select");

            cepSelect.innerHTML = "";
            fretes.data.forEach(frete => {
                const option = document.createElement('option');
                option.innerHTML = (frete.Codigo == 40010 ? 'Sedex' : "Pac") + " - " + "R$" + frete.Valor;
                option.value = frete.Codigo;
                cepSelect.appendChild(option);
            });
            cepContainer.style.display = 'flex';
        }
    </script>
</body>

</html>