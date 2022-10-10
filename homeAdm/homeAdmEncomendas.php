<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/menuAdm.css" rel="stylesheet">
    <link href="../css/homeAdm/homeAdmEncomendas.css" rel="stylesheet">
</head>

<body>

    <?php
    include '../Componentes/cabecalhoHomeAdm.php';
    ?>
    <div style="display: flex;">
        <?php include '../Componentes/menuAdm.php'; ?>
    </div>

    <main>
        <div class="conteudo-principal">
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
                </div>

                <div class="detalhes-extras">
                    <div class="detalhes-produto">
                        <div class="produtos-comprados">
                            <div>
                                <label class="titulo-label">Produtos</label>
                            </div>

                            <div class="div-compras">
                                <p class="texto-detalhes">2x Pulseira Verde Pet</p>
                                <p class="texto-detalhes">1x Pulseira Verde Cabeca</p>
                            </div>
                        </div>

                        <div class="valor-produtos">
                            <div class="div-valor">
                                <label class="titulo-label">Valor</label>
                                <p class="texto-detalhes">R$20,00</p>
                                <p class="texto-detalhes">R$100,000</p>
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
                </div>

                <div class="detalhes-extras">
                    <div class="detalhes-produto">
                        <div class="produtos-comprados">
                            <div>
                                <label class="titulo-label">Produtos</label>
                            </div>

                            <div class="div-compras">
                                <p class="texto-detalhes">2x Pulseira Verde Pet</p>
                                <p class="texto-detalhes">1x Pulseira Verde Cabeca</p>
                            </div>
                        </div>

                        <div class="valor-produtos">
                            <div class="div-valor">
                                <label class="titulo-label">Valor</label>
                                <p class="texto-detalhes">R$20,00</p>
                                <p class="texto-detalhes">R$100,000</p>
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
    </main>

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>