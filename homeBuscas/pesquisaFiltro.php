<?php
include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado - Pesquisa</title>

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="./css/pesquisaFiltro.css" rel="stylesheet">
</head>

<body>

    <?php
    session_start();

    if (isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHomeLogado.php';
    } else if (!isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHome.php';
    }
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="filtros">
                <div>
                    <label class="label-titulo-filtro">Pulseira</label>
                </div>

                <div>
                    <div>
                        <label class="label-categorias-filtro">Categorias</label>
                    </div>

                    <div class="conjunto-checkbox">
                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Papercraft</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Hama Beads</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Macramê</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Piçangas</label>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <label class="label-categorias-filtro">Subcategorias</label>
                    </div>

                    <div class="conjunto-checkbox">
                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Temático</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Colorido</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Verde</label>
                        </div>

                        <div>
                            <input type="checkbox">
                            <label class="label-conteudo-filtro">Azul</label>
                        </div>
                    </div>
                </div>

                <div class="input-salvar">
                    <button class="botao-salvar">
                        <input type="submit" value="Salvar">
                        Salvar
                    </button>
                </div>
            </div>

            <div class="produtos">
                <div class="destaques-produtos">
                    <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Pet</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>

                <div class="destaques-produtos">
                    <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Pet</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>

                <div class="destaques-produtos">
                    <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Pet</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>

                <div class="destaques-produtos">
                    <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Pet</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>

                <div class="destaques-produtos">
                    <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Pet</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>

                <div class="destaques-produtos">
                    <img class="foto-produtos" src="../imagens/produtos/Pulseira-animal.png">
                    <div class="espacamento-produto">
                        <p class="tag-produto">Macramê > Pulseiras</p>
                        <h3 class="titulo-produto">Pulseira Pet</h3>
                        <div class="conjunto-preco-comprar">
                            <p class="preco-produto">R$15,00</p>
                            <button class="botao-comprar"><a href="#">Comprar</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include '../Componentes/rodapeHome.php';
    include '../Componentes/sugestaoProduto.php';
    ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>