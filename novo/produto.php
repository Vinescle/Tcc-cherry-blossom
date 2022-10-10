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
    <link href="<?php echo $rota; ?>/assets/css/pages/produto.css" rel="stylesheet">
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
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div id="carouselExampleIndicatorsLeft" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://pbs.twimg.com/media/FeiTd29XkAALZYW?format=jpg&name=4096x4096" class="d-block w-100" alt="..." />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://pbs.twimg.com/media/FemAlr-WAAAUN5W?format=jpg&name=900x900" class="d-block w-100" alt="..." />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://pbs.twimg.com/media/FeDZfveUUAAUJ2U?format=jpg&name=4096x4096" class="d-block w-100" alt="..." />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://pbs.twimg.com/media/FemAlr-WAAAUN5W?format=jpg&name=900x900" class="d-block w-100" alt="..." />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://pbs.twimg.com/media/FeDZfveUUAAUJ2U?format=jpg&name=4096x4096" class="d-block w-100" alt="..." />
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                    <div class="slider carousel-thumbs">
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide-to="0" class="active w-100" aria-current="true" aria-label="Slide 1">
                                            <img class="d-block w-100" src="https://pbs.twimg.com/media/FeiTd29XkAALZYW?format=jpg&name=4096x4096" class="img-fluid" />
                                        </button>

                                        <button type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide-to="1" class="w-100" aria-label="Slide 2">
                                            <img class="d-block w-100" src="https://pbs.twimg.com/media/FemAlr-WAAAUN5W?format=jpg&name=900x900" class="img-fluid" />
                                        </button>

                                        <button type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide-to="2" class="w-100" aria-label="Slide 3">
                                            <img class="d-block w-100" src="https://pbs.twimg.com/media/FeDZfveUUAAUJ2U?format=jpg&name=4096x4096" class="img-fluid" />
                                        </button>

                                        <button type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide-to="1" class="w-100" aria-label="Slide 2">
                                            <img class="d-block w-100" src="https://pbs.twimg.com/media/FemAlr-WAAAUN5W?format=jpg&name=900x900" class="img-fluid" />
                                        </button>

                                        <button type="button" data-bs-target="#carouselExampleIndicatorsLeft" data-bs-slide-to="2" class="w-100" aria-label="Slide 3">
                                            <img class="d-block w-100" src="https://pbs.twimg.com/media/FeDZfveUUAAUJ2U?format=jpg&name=4096x4096" class="img-fluid" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="produto-dados">
                    <div class="div-tituloProduto">
                        <label class="titulo-produto">Chaveiro Palhaçu</label>

                        <div class="conjunto-estatisticas">
                            <label class="texto-estatisticas">0.0</label>
                            <label class="texto-estatisticas separador-estatisticas">|</label>
                            <label class="texto-estatisticas">XX Avaliações</label>
                            <label class="texto-estatisticas separador-estatisticas">|</label>
                            <label class="texto-estatisticas">XX Vendidos</label>
                        </div>
                    </div>

                    <div class="conjunto-precos">
                        <div class="precos">
                            <div>
                                <label class="preco-original">R$2.000,00</label>
                            </div>

                            <div>
                                <label class="preco-promocional">R$1.000,00</label>
                            </div>
                        </div>

                        <label class="texto-parcela">Em 10x R$100,00 (Sem juros)</label>
                    </div>

                    <div class="conjunto-input-frete">
                        <label>Calcule o Frete:</label>
                        <div class="flex">
                            <div class="cep-container margem-direita">
                                <input type="text" class="limpa-style" placeholder="Insira um CEP" maxlength="8">
                                <button class="botao-texto min-width-botao centralizar">Confirmar</button>
                            </div>
                            <div class="cep-container">
                                <select name="" id="" class="limpa-borda">
                                    <option value="">SEDEXO - R$10,00</option>
                                    <option value="">Pactw - R$99,00</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="margem-topo">
                        <label>Quantidade</label>

                        <div class="quantidade-container">
                            <button class="limpa-style modificar-quantidade" onclick="aumenta()">
                                <ion-icon name="add-outline"></ion-icon>
                            </button>
                            <input type="number" name="" class="limpa-style quantidade" value="1" id="quantidade" min="1">
                            <button class="limpa-style modificar-quantidade" onclick="diminui()">
                                <ion-icon name="remove-outline"></ion-icon>
                            </button>
                        </div>
                    </div>

                    <div class="flex-esquerda margem-topo">
                        <button class="botao-texto min-width-botao margem-direita">
                            <ion-icon class="icone-input md hydrated" name="cart-outline"></ion-icon> Adicionar ao Carrinho
                        </button>
                        <button class="botao-texto min-width-botao">
                            <ion-icon class="icone-input md hydrated" name="card-outline"></ion-icon>Comprar
                        </button>
                    </div>
                </div>
            </div>
            <div>
                <span class="titulo-descricao">Descrição: </span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et vestibulum enim, in finibus turpis. Donec quam arcu, interdum laoreet mattis vitae, aliquam eget libero. Maecenas quis velit fermentum, consequat odio et, molestie ipsum. Suspendisse malesuada ante at augue euismod sollicitudin. Duis et risus eu mauris euismod molestie. Nunc eu feugiat ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vulputate orci ut ante suscipit eleifend. Phasellus ut interdum ante, ac pharetra magna.
                </p>
                <span class="titulo-descricao">Marca: Gostosa</span>

            </div>
        </div>

    </main>

    <?php
    include('./componentes/rodape.php');
    ?>

    <?php
    include('./imports.php');
    ?>

    <script>
        const quantidade = document.querySelector('#quantidade');

        function aumenta() {
            quantidade = quantidade.value++;
        }

        function diminui() {
            if (quantidade.value > 1)
                quantidade = quantidade.value--;
        }
    </script>
</body>

</html>