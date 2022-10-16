<?php
$page = 'gerenciar';
include '../../conexao.php';

$sql = "SELECT * FROM tb_marcas";
$resultadoMarcas = mysqli_query($conexao, $sql);

$sql = "SELECT * FROM tb_categoria";
$resultadoCategorias = mysqli_query($conexao, $sql);

$sql = "SELECT * FROM tb_sub_categoria";
$resultadoSubCategoria = mysqli_query($conexao, $sql);

$id = 32;
$sqlProduto = "SELECT a.id_produtos,
a.nome_produto,
a.descricao_produto,
a.preco_produto,
a.qtd_produto,
a.largura_produto,
a.profundidade_produto,
a.peso_produto,
a.visualizacao_url,
a.altura_produto,
e.id_categoria,
d.id_sub_categoria,
f.fk_id_marcas,
b.url
FROM tb_produtos a
INNER JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria
INNER JOIN tb_marcas_produtos f ON f.fk_id_produtos = a.id_produtos
WHERE a.id_produtos = $id";
$resultadoProduto = mysqli_query($conexao,$sqlProduto);
$resultadoProduto = mysqli_fetch_array($resultadoProduto);

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
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-lateral.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/produtos/form-cadastro.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../../componentes/menu-cabeçalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <form action="alteraProduto.php" method="POST" enctype="multipart/form-data">
                    <div class="formulario">
                        <div class="input-container-form-produto">
                            <div class="w-160">
                                <label class="input-texto">Nome do Produto</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="color-palette-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="nomeProduto" required type="text" value="<?php echo $resultadoProduto['nome_produto'] ?>">
                                </div>

                            </div>
                            <div class="w-100">
                                <label class="input-texto">Preço</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <label class="icone-input md hydrated">$</label>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="precoProduto" required="" type="text" value="<?php echo $resultadoProduto['preco_produto'] ?>">
                                </div>
                            </div>
                            <div class="w-100">
                                <label class="input-texto">Preço Promocional</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="wallet-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto input-tiktok" disabled name="precoPromocional" placeholder="Preço promocional" required="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="input-container-form-produto">
                            <div class="w-100">
                                <label class="input-texto">Descrição</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="newspaper-outline"></ion-icon>
                                    </button>
                                    <textarea class="input-conjunto input-tiktok" name="descricaoProduto" cols="30" rows="10"><?php echo $resultadoProduto['descricao_produto'] ?></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="input-container-form-produto">
                            <div class="w-100">
                                <label class="input-texto">Marca</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="balloon-outline"></ion-icon>
                                    </button>
                                    <select class="input-conjunto input-tiktok" name="idmarca">
                                        <?php while ($resultado = mysqli_fetch_array($resultadoMarcas)) { 
                                            if($resultado['id_marca'] == $resultadoProduto['fk_id_marcas']){
                                                ?>
                                            <option selected value="<?php echo $resultado['id_marca']; ?>">
                                                <?php echo $resultado['nome_marca']; ?>
                                            </option>
                                            <?php
                                            }else{
                                                ?>
                                                <option value="<?php echo $resultado['id_marca']; ?>">
                                                <?php echo $resultado['nome_marca']; ?>
                                                </option>
                                            <?php
                                            }
                                            }
                                            ?>
                                    </select>
                                </div>

                            </div>
                            <div class="w-100">
                                <label class="input-texto">Categoria</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="pricetag-outline"></ion-icon>
                                    </button>
                                    <select class="input-conjunto input-tiktok" name="idcategoria">
                                        <?php
                                        while ($resultado = mysqli_fetch_array($resultadoCategorias)) {
                                            if($resultado['id_categoria'] == $resultadoProduto['id_categoria']){
                                            ?>
                                            <option selected value="<?php echo $resultado['id_categoria']; ?>">
                                                <?php echo $resultado['nome_categoria']; ?>
                                            </option>
                                            <?php
                                            }
                                            else{
                                            ?>
                                                <option value="<?php echo $resultado['id_categoria']; ?>">
                                                <?php echo $resultado['nome_categoria']; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="w-100">
                                <label class="input-texto">Subcategoria</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="pricetags-outline"></ion-icon>
                                    </button>
                                    <select class="input-conjunto input-tiktok" name="idsubcategoria">
                                        <?php
                                        while ($resultado = mysqli_fetch_array($resultadoSubCategoria)) {
                                            if($resultado['id_sub_categoria'] == $resultadoProduto['id_sub_categoria']){
                                                ?>
                                            <option selected value="<?php echo $resultado['id_sub_categoria']; ?>">
                                                <?php echo $resultado['nome_sub_categoria']; ?>
                                            </option>
                                            <?php
                                            }else{
                                            ?>
                                        ?>
                                            <option value="<?php echo $resultado['id_sub_categoria']; ?>">
                                                <?php echo $resultado['nome_sub_categoria']; ?>
                                            </option>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="input-container-form-produto">
                            <div class="w-100">
                                <label class="input-texto">Largura</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="color-palette-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="larguraProduto" required="" type="text" value="<?php echo $resultadoProduto['largura_produto'] ?>">
                                </div>

                            </div>
                            <div class="w-100">
                                <label class="input-texto">Comprimento</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <label class="icone-input md hydrated">$</label>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="profundidadeProduto" required type="text" value="<?php echo $resultadoProduto['profundidade_produto'] ?>">
                                </div>
                            </div>
                            <div class="w-100">
                                <label class="input-texto">Altura</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="wallet-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="alturaProduto" required type="text" value="<?php echo $resultadoProduto['altura_produto'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-container-form-produto">
                            <div class="w-100">
                                <label class="input-texto">Peso</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="color-palette-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="pesoProduto" required type="text" value="<?php echo $resultadoProduto['peso_produto'] ?>">
                                </div>

                            </div>
                            <div class="w-100">
                                <label class="input-texto">Estoque</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <label class="icone-input md hydrated">$</label>
                                    </button>
                                    <input class="input-conjunto input-tiktok" value="<?php echo $resultadoProduto['qtd_produto'] ?>" name="quantidadeProduto" required type="text">
                                </div>
                            </div>
                            <div class="w-100">
                                <label class="input-texto">Link da Visualização 3D</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="wallet-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="URLProduto" required="" type="text" value="<?php echo $resultadoProduto['visualizacao_url'] ?>">
                                </div>
                            </div>
                        </div>

                        <div class="formulario-imagens">
                            <label class="input-texto">Imagens</label>
                            <div class="imagens">
                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                        <input type="file" method="POST" name="imagemProduto-1" value="<?php echo $resultadoProduto[13] ?>">
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                        <input type="file" method="POST" name="imagemProduto-2" value="<?php echo $resultadoProduto[14] ?>">
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                        <input type="file" method="POST" name="imagemProduto-3" value="<?php echo $resultadoProduto[15] ?>">
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                        <input type="file" method="POST" name="imagemProduto-4" value="<?php echo $resultadoProduto[16] ?>">
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                        <input type="file" method="POST" name="imagemProduto-5" value="<?php echo $resultadoProduto[17] ?>">
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="input-salvar">
                            <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
        include('../../imports.php');
        ?>
</body>

</html>