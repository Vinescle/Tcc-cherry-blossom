<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/homePerfil/homePerfilCarrinho.css" rel="stylesheet">
</head>

<body>
    <div class="conteudo-principal">
        <div class="agrupamento">
            <div class="label-dadosBasicos">
                <label class="label-titulo">Frete</label>
            </div>

            <div class="conjunto-dadosBasicos">
                <div class="conjunto-divs">
                    <div class="conjunto-informacoes">
                        <label class="input-texto">CEP</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="map-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>
                </div>

                <div class="enderecos">
                    <div>
                        <input type="checkbox">
                        <label class="texto-label">R$ 21,58 - Correios PAC (1 a 8 dias úteis)</label>
                    </div>

                    <div>
                        <input type="checkbox">
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
                                    <img src="../imagens/site/teemo.jpg">
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
                                    <img src="../imagens/site/yasuo.png">
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
                <button class="botao-salvar">
                    <input type="submit" value="Salvar">
                    Continuar
                </button>
            </div>
        </div>
    </div>

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>