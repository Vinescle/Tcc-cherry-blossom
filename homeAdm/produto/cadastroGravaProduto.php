<?php

include '../../conexao/conexao.php';

// CAMPOS INSERT PARA tb_marcas_produtos
$idMarca = $_POST['idmarca'];
$idcategoria = $_POST['idcategoria'];
$idsubcategoria = $_POST['idsubcategoria'];

// CAMPOS INSERT PARA tb_produto
$nomeProduto = $_POST['nomeProduto'];
$descricaoProduto = $_POST['descricaoProduto'];
$precoProduto = $_POST['precoProduto'];
$quantidadeProduto = $_POST['quantidadeProduto'];
$URLProduto = $_POST['URLProduto'];
$quantidadeProduto = $_POST['quantidadeProduto'];
$pesoProduto = $_POST['pesoProduto'];
$alturaProduto = $_POST['alturaProduto'];
$larguraProduto = $_POST['larguraProduto'];
$profundidadeProduto = $_POST['profundidadeProduto'];
$imagensProduto = [];
if(!empty($_FILES['imagemProduto-1']['name'])) $imagensProduto[] = $_FILES['imagemProduto-1'];
if(!empty($_FILES['imagemProduto-2']['name'])) $imagensProduto[] = $_FILES['imagemProduto-2'];
if(!empty($_FILES['imagemProduto-3']['name'])) $imagensProduto[] = $_FILES['imagemProduto-3'];
if(!empty($_FILES['imagemProduto-4']['name'])) $imagensProduto[] = $_FILES['imagemProduto-4'];
if(!empty($_FILES['imagemProduto-5']['name'])) $imagensProduto[] = $_FILES['imagemProduto-5'];

$sql = "INSERT INTO tb_produtos(nome_produto, descricao_produto, preco_produto, qtd_produto, visualizacao_url, peso_produto, altura_produto, largura_produto, profundidade_produto) 
VALUES ('$nomeProduto','$descricaoProduto',$precoProduto,$quantidadeProduto,'$URLProduto',$pesoProduto,$alturaProduto,$larguraProduto,$profundidadeProduto)";

mysqli_query($conexao,$sql);
$ultimoIdProdutos = mysqli_insert_id($conexao);

foreach($imagensProduto as $imagemProduto){
    $nomeImagem = addslashes(md5($imagemProduto['tmp_name'])."-".$imagemProduto['name']);

    $sql = "INSERT INTO tb_imagem_produtos (fk_id_produto,url) VALUES ($ultimoIdProdutos,'$nomeImagem')";

    $queryImagem = mysqli_query($conexao,$sql);

    move_uploaded_file($imagemProduto['tmp_name'],"../../imagemBancoDeDados/produtos/$nomeImagem");
}

$sqlMarcasEProdutos = "INSERT INTO tb_marcas_produtos(fk_id_produtos, fk_id_marcas) VALUES ($ultimoIdProdutos,$idMarca)";
mysqli_query($conexao,$sqlMarcasEProdutos);

$sqlSubCategoriaEProdutos = "INSERT INTO tb_produtos_sub_categorias(fk_id_produtos, fk_id_sub_categorias) VALUES ($ultimoIdProdutos,$idsubcategoria)";
mysqli_query($conexao,$sqlSubCategoriaEProdutos);
?>