<?php
$page = 'gerenciar';
include '../../conexao.php';
if (count($_GET) == 0){
    echo "<script> alert('Nenhum item foi selecionado'); window.location.href='$rota/home-adm/gerenciar.php';</script>";
}
if (count($_GET['idproduto']) > 1) {
    echo "<script> alert('Selecione apenas um item'); window.location.href='$rota/home-adm/gerenciar.php';</script>";
    // header("location:$rota/home-adm/gerenciar.php");
}
include '../../verifica-logado.php';


$sql = "SELECT * FROM tb_marcas";
$resultadoMarcas = mysqli_query($conexao, $sql);

$sql = "SELECT * FROM tb_categoria";
$resultadoCategorias = mysqli_query($conexao, $sql);

$id = $_GET['idproduto'][0];
$sqlProduto = "SELECT a.id_produtos,
a.nome_produto,
a.descricao_produto,
a.preco_produto,
a.preco_fora_promocao,
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
LEFT JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria
INNER JOIN tb_marcas_produtos f ON f.fk_id_produtos = a.id_produtos
WHERE a.id_produtos = $id";
$resultadoProduto = mysqli_query($conexao, $sqlProduto);
$resultadoProduto = mysqli_fetch_array($resultadoProduto);

$sql = "SELECT * FROM tb_imagem_produtos WHERE fk_id_produto = $id";
$resultadoImagemProduto = mysqli_query($conexao, $sql);
$resultadoImagemProduto = mysqli_fetch_all($resultadoImagemProduto);
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
    include('../../componentes/menu-cabecalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <form action="alteraProduto.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="idproduto" value="<?php echo $id ?>" style="display:none;">
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
                                <label class="input-texto">Preço fora de promoção</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input md hydrated" name="wallet-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto input-tiktok" name="precoPromocional" placeholder="Preço promocional" type="text" value="<?php echo $resultadoProduto['preco_fora_promocao'] ?>">
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
                                        <option value="0">Sem Marca</option>
                                        <?php while ($resultado = mysqli_fetch_array($resultadoMarcas)) {
                                            if ($resultado['id_marca'] == $resultadoProduto['fk_id_marcas']) {
                                        ?>
                                                <option selected value="<?php echo $resultado['id_marca']; ?>">
                                                    <?php echo $resultado['nome_marca']; ?>
                                                </option>
                                            <?php
                                            } else {
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
                                    <select id="categoria" onchange="listarSubCategorias()" class="input-conjunto input-tiktok" name="idcategoria">
                                        <?php
                                        while ($resultado = mysqli_fetch_array($resultadoCategorias)) {
                                            if ($resultado['id_categoria'] == $resultadoProduto['id_categoria']) {
                                        ?>
                                                <option selected value="<?php echo $resultado['id_categoria']; ?>">
                                                    <?php echo $resultado['nome_categoria']; ?>
                                                </option>
                                            <?php
                                            } else {
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
                                    <select id="subcategoria" class="input-conjunto input-tiktok" name="idsubcategoria">
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
                                        <?php
                                        if (isset($resultadoImagemProduto[0][1])) {
                                            $caminhoProduto = $resultadoImagemProduto[0][1];
                                        ?>
                                            <img src="../../assets/imagens/storage/produtos/<?php echo $caminhoProduto; ?>" id="output" alt="Imagem produto" style="width:200px; aspect-ratio: 1/1;">
                                            <input type="file" method="POST" name="imagemProduto-1" class="imagemProduto-1" value="<?php echo $caminhoProduto ?>" onchange="previewImagem(event)">
                                        <?php
                                        } else {
                                        ?>
                                            <ion-icon class="input-icone_botao input-icone_botao_1" name="add-outline"></ion-icon>
                                            <input type="file" method="POST" name="imagemProduto-1" class="imagemProduto-1" onchange="previewImagem1(event)">
                                        <?php } ?>
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <?php
                                        if (isset($resultadoImagemProduto[1][1])) {
                                            $caminhoProduto = $resultadoImagemProduto[1][1];
                                        ?>
                                            <img src="../../assets/imagens/storage/produtos/<?php echo $caminhoProduto; ?>" id="output2" alt="Imagem produto" style="width:200px; aspect-ratio: 1/1;">
                                            <input type="file" method="POST" name="imagemProduto-2" class="imagemProduto-2" value="<?php echo $caminhoProduto ?>" onchange="previewImagem2(event)">
                                        <?php
                                        } else {
                                        ?>
                                            <ion-icon class="input-icone_botao input-icone_botao_2" name="add-outline"></ion-icon>
                                            <input type="file" method="POST" name="imagemProduto-2" class="imagemProduto-2" onchange="previewImagem2(event)">
                                        <?php } ?>
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <?php
                                        if (isset($resultadoImagemProduto[2][1])) {
                                            $caminhoProduto = $resultadoImagemProduto[2][1];
                                        ?>
                                            <img src="../../assets/imagens/storage/produtos/<?php echo $caminhoProduto; ?>" id="output3" alt="Imagem produto" style="width:200px; aspect-ratio: 1/1;">
                                            <input type="file" method="POST" name="imagemProduto-3" class="imagemProduto-3" value="<?php echo $caminhoProduto ?>" onchange="previewImagem3(event)">
                                        <?php
                                        } else {
                                        ?>
                                            <ion-icon class="input-icone_botao input-icone_botao_3" name="add-outline"></ion-icon>
                                            <input type="file" method="POST" name="imagemProduto-3" class="imagemProduto-3" onchange="previewImagem3(event)">
                                        <?php } ?>
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <?php
                                        if (isset($resultadoImagemProduto[3][1])) {
                                            $caminhoProduto = $resultadoImagemProduto[3][1];
                                        ?>
                                            <img src="../../assets/imagens/storage/produtos/<?php echo $caminhoProduto; ?>" id="output4" alt="Imagem produto" style="width:200px; aspect-ratio: 1/1;">
                                            <input type="file" method="POST" name="imagemProduto-4" class="imagemProduto-4" value="<?php echo $caminhoProduto ?>" onchange="previewImagem4(event)">
                                        <?php
                                        } else {
                                        ?>
                                            <input type="file" method="POST" name="imagemProduto-4" class="imagemProduto-4" onchange="previewImagem4(event)">
                                            <ion-icon class="input-icone_botao input-icone_botao_4" name="add-outline"></ion-icon>
                                        <?php } ?>
                                    </button>
                                </div>

                                <div class="conjunto-imagens">
                                    <button class="botao-banner" type="button">
                                        <?php
                                        if (isset($resultadoImagemProduto[4][1])) {
                                            $caminhoProduto = $resultadoImagemProduto[4][1];
                                        ?>
                                            <img src="../../assets/imagens/storage/produtos/<?php echo $caminhoProduto; ?>" id="output5" alt="Imagem produto" style="width:200px; aspect-ratio: 1/1;">
                                            <input type="file" method="POST" name="imagemProduto-5" class="imagemProduto-5" value="<?php echo $caminhoProduto ?>" onchange="previewImagem5(event)">
                                        <?php
                                        } else {
                                        ?>
                                            <ion-icon class="input-icone_botao input-icone_botao_5" name="add-outline"></ion-icon>
                                            <input type="file" method="POST" name="imagemProduto-5" class="imagemProduto-5" onchange="previewImagem5(event)">
                                        <?php } ?>
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

        <script>
            const input_icone_botao_1 = document.querySelector('.input-icone_botao_1');
            const input_icone_botao_2 = document.querySelector('.input-icone_botao_2');
            const input_icone_botao_3 = document.querySelector('.input-icone_botao_3');
            const input_icone_botao_4 = document.querySelector('.input-icone_botao_4');
            const input_icone_botao_5 = document.querySelector('.input-icone_botao_5');

            var previewImagem = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src)
                }
            };
            const imagemProduto_1 = document.querySelector('.imagemProduto-1');
            imagemProduto_1.addEventListener('change', function(e) {
                input_icone_botao_1.classList.add('oculta');
            })


            function previewImagem2(event) {
                var output2 = document.getElementById('output2');
                output2.src = URL.createObjectURL(event.target.files[0]);
                output2.onload = function() {
                    URL.revokeObjectURL(output2.src)
                }
            };
            const imagemProduto_2 = document.querySelector('.imagemProduto-2');
            imagemProduto_2.addEventListener('change', function(e) {
                input_icone_botao_2.classList.add('oculta');
            })

            function previewImagem3(event) {
                var output3 = document.getElementById('output3');
                output3.src = URL.createObjectURL(event.target.files[0]);
                output3.onload = function() {
                    URL.revokeObjectURL(output3.src)
                }
            };
            const imagemProduto_3 = document.querySelector('.imagemProduto-3');
            imagemProduto_3.addEventListener('change', function(e) {
                input_icone_botao_3.classList.add('oculta');
            })

            function previewImagem4(event) {
                var output4 = document.getElementById('output4');
                output4.src = URL.createObjectURL(event.target.files[0]);
                output4.onload = function() {
                    URL.revokeObjectURL(output4.src)
                }
            };
            const imagemProduto_4 = document.querySelector('.imagemProduto-4');
            imagemProduto_4.addEventListener('change', function(e) {
                input_icone_botao_4.classList.add('oculta');
            })

            function previewImagem5(event) {
                var output5 = document.getElementById('output5');
                output5.src = URL.createObjectURL(event.target.files[0]);
                output5.onload = function() {
                    URL.revokeObjectURL(output5.src)
                }
            };
            const imagemProduto_5 = document.querySelector('.imagemProduto-5');
            imagemProduto_5.addEventListener('change', function(e) {
                input_icone_botao_5.classList.add('oculta');
            })
            // $resultadoProduto['id_sub_categoria']

            const selectCategoria = document.querySelector("#categoria");
            const selectSubcategoria = document.querySelector("#subcategoria");

            async function listarSubCategorias() {
                const response = await axios.get(
                    `<?php echo $rota ?>/api/subcategorias.php?categoria=${selectCategoria.value}`
                );
                subcategoria.innerHTML = '';
                if (response.data) {
                    response.data.forEach((subcategoria) => {
                        const option = document.createElement("option");
                        option.innerHTML = subcategoria.nome_sub_categoria;
                        option.value = subcategoria.id_sub_categoria;
                        if (subcategoria.id_sub_categoria == <?php echo $resultadoProduto['id_sub_categoria'] ?>)
                            option.setAttribute("selected", "selected");

                        selectSubcategoria.appendChild(option);
                    });
                }
            }
            window.onload = async function() {
                await listarSubCategorias();
            }
        </script>
        <?php
        include('../../imports.php');
        ?>
</body>

</html>