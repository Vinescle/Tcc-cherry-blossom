<?php

include "../../conexao.php";

$idMarca = $_POST['idmarca'];
$idcategoria = $_POST['idcategoria'];
$idsubcategoria = $_POST['idsubcategoria'];

// CAMPOS INSERT PARA tb_produto
$idproduto = 31;
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

$sqlBuscaImagens = "SELECT * FROM `tb_imagem_produtos` WHERE fk_id_produto = $idproduto";
$ResultadoImagens = mysqli_query($conexao,$sqlBuscaImagens);

if(!empty($imagensProduto)){
    while($resultado = mysqli_fetch_array($ResultadoImagens)){
        unlink("$rotaAntigaTeste/imagemBancoDeDados/produtos".$resultado['url']);
    }
}

if(!empty($imagensProduto)){
    $sqlDeleteImagens = "DELETE FROM `tb_imagem_produtos` WHERE fk_id_produto = $idproduto";
    $ResultadoImagens = mysqli_query($conexao,$sqlDeleteImagens);   
}


$sql = "UPDATE `tb_produtos` SET `nome_produto`='$nomeProduto',`descricao_produto`='$descricaoProduto',`preco_produto`='$precoProduto',`qtd_produto`='$quantidadeProduto',`visualizacao_url`='$URLProduto',`peso_produto`='$pesoProduto',`altura_produto`='$alturaProduto',`largura_produto`='$larguraProduto',`profundidade_produto`='$profundidadeProduto' WHERE id_produtos = $idproduto";


foreach($imagensProduto as $imagemProduto){
    $nomeImagem = addslashes(md5($imagemProduto['tmp_name'])."-".$imagemProduto['name']);

    $sql = "INSERT INTO tb_imagem_produtos(fk_id_produto, url) VALUES ($idproduto,'$nomeImagem')";

    $queryImagem = mysqli_query($conexao,$sql);

    move_uploaded_file($imagemProduto['tmp_name'],"../../imagemBancoDeDados/produtos/$nomeImagem");
}


header('Location:../gerenciar.php');

// mysqli_query($conexao,$sql);



?>