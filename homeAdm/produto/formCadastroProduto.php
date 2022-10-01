<?php
include '../../conexao/conexao.php';
$sql = "SELECT * FROM tb_marcas";
$resultadoMarcas = mysqli_query($conexao, $sql);

$sql = "SELECT * FROM tb_categoria";
$resultadoCategorias = mysqli_query($conexao, $sql);

$sql = "SELECT * FROM tb_sub_categoria";
$resultadoSubCategoria = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de produtos</title>

    <link href="../../css/reset.css" rel="stylesheet">
    <link href="../../css/estilo-home.css" rel="stylesheet">
    <link href="../../css/menuAdm.css" rel="stylesheet">
    <link href="../../css/produtos/produtos.css" rel="stylesheet">
</head>

<body>

    <?php
    include '../../Componentes/cabecalhoHomeAdm.php';
    ?>

    <div style="display: flex;">
        <?php include '../../Componentes/menuAdm.php'; ?>
    </div>

    <div class="conteudo-principal">
        <div class="main">
            <form action="cadastroGravaProduto.php" method="POST" enctype="multipart/form-data">
                <div class="formulario">
                    <div class="input-nome-preco">
                        <div class="conjunto-nome">
                            <label class="input-texto">Nome do Produto</label>
                            <div class="conjunto-icone-input">
                                <ion-icon class="botao-icone" name="color-palette-outline"></ion-icon>
                                <input class="input-label-nome" type="text" name="nomeProduto">
                            </div>
                        </div>

                        <div class="conjunto-precoLabel">
                            <label class="input-texto">Preço</label>
                            <div class="conjunto-icone-input">
                                <label class="botao-icone_especial">$</label>
                                <input class="input-label-nome" type="text" name="precoProduto">
                            </div>
                        </div>

                        <div class="conjunto-precoLabel">
                            <label class="input-texto">Preço Promocional</label>
                            <div class="conjunto-icone-input">
                                <ion-icon class="botao-icone" name="wallet-outline"></ion-icon>
                                <input class="input-label-nome" type="text" name="precoPromocional">
                            </div>
                        </div>
                    </div>

                    <div class="conjunto-descricao">
                        <label class="input-texto">Descrição</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone_descricao" name="newspaper-outline"></ion-icon>
                            <textarea class="input-descricao" name="descricaoProduto" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="conjunto-selects">
                        <div class="select">
                            <label class="input-texto">Marca</label>
                            <div class="conjunto-icone-input">
                                <ion-icon class="botao-icone" name="balloon-outline"></ion-icon>

                                <select class="select-form" name="idmarca">
                                    <option selected></option>
                                    <?php while ($resultado = mysqli_fetch_array($resultadoMarcas)) { ?>
                                        <option value="<?php echo $resultado['id_marca']; ?>">
                                            <?php echo $resultado['nome_marca']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="select">
                            <label class="input-texto">Categoria</label>
                            <div class="conjunto-icone-input">
                                <ion-icon class="botao-icone" name="pricetag-outline"></ion-icon>

                                <select class="select-form" name="idcategoria">
                                    <option selected></option>
                                    <?php
                                    while ($resultado = mysqli_fetch_array($resultadoCategorias)) {
                                    ?>
                                        <option value="<?php echo $resultado['id_categoria']; ?>">
                                            <?php echo $resultado['nome_categoria']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="select">
                            <label class="input-texto">Subcategoria</label>
                            <div class="conjunto-icone-input">
                                <ion-icon class="botao-icone" name="pricetags-outline"></ion-icon>

                                <select class="select-form" name="idsubcategoria">
                                    <option selected></option>
                                    <?php
                                    while ($resultado = mysqli_fetch_array($resultadoSubCategoria)) {
                                    ?>
                                        <option value="<?php echo $resultado['id_sub_categoria']; ?>">
                                            <?php echo $resultado['nome_sub_categoria']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="formulario-proporcoes">
                        <div class="conjunto-tamanhos">
                            <label class="input-texto">Largura</label>
                            <div class="conjunto-icone-input">
                                <label class="botao-icone_texto">cm</label>
                                <input class="input-label-proporcoes" type="text" name="larguraProduto">
                            </div>
                        </div>

                        <div class="conjunto-tamanhos">
                            <label class="input-texto">Comprimento</label>
                            <div class="conjunto-icone-input">
                                <label class="botao-icone_texto">cm</label>
                                <input class="input-label-proporcoes" type="text" name="profundidadeProduto">
                            </div>
                        </div>

                        <div class="conjunto-tamanhos">
                            <label class="input-texto">Altura</label>
                            <div class="conjunto-icone-input">
                                <label class="botao-icone_texto">cm</label>
                                <input class="input-label-proporcoes" type="text" name="alturaProduto">
                            </div>
                        </div>
                    </div>

                    <div class="formulario-gerais">
                        <div class="conjunto-gerais">
                            <label class="input-texto">Peso</label>
                            <div class="conjunto-icone-input">
                                <label class="botao-icone_texto">KG</label>
                                <input class="input-label-gerais" type="text" name="pesoProduto">
                            </div>
                        </div>

                        <div class="conjunto-gerais">
                            <label class="input-texto">Estoque</label>
                            <div class="conjunto-icone-input">
                                <ion-icon class="botao-icone" name="cube-outline"></ion-icon>
                                <input class="input-label-gerais" type="text" name="quantidadeProduto">
                            </div>
                        </div>

                        <div class="conjunto-gerais">
                            <label class="input-texto">Link da Visualização 3D</label>
                            <div class="conjunto-icone-input">
                                <label class="botao-icone_texto">3D</label>
                                <input class="input-label-gerais" type="text" name="URLProduto">
                            </div>
                        </div>
                    </div>

                    <div class="formulario-imagens">
                        <label class="input-texto">Imagens</label>
                        <div class="imagens">
                            <div class="conjunto-imagens">
                                <button class="botao-banner">
                                    <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                    <input type="file" method="POST" name="imagemProduto-1">
                                </button>
                            </div>

                            <div class="conjunto-imagens">
                                <button class="botao-banner">
                                    <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                    <input type="file" method="POST" name="imagemProduto-2">
                                </button>
                            </div>

                            <div class="conjunto-imagens">
                                <button class="botao-banner">
                                    <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                    <input type="file" method="POST" name="imagemProduto-3">
                                </button>
                            </div>

                            <div class="conjunto-imagens">
                                <button class="botao-banner">
                                    <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                    <input type="file" method="POST" name="imagemProduto-4">
                                </button>
                            </div>

                            <div class="conjunto-imagens">
                                <button class="botao-banner">
                                    <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                    <input type="file" method="POST" name="imagemProduto-5">
                                </button>
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
            </form>
        </div>
    </div>

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>