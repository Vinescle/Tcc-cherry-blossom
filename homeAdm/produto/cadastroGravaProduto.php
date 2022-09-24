<?php

include '../../conexao/conexao.php';

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
$ultimoId = mysqli_insert_id($conexao);

foreach($imagensProduto as $imagemProduto){
    $nomeImagem = addslashes(md5($imagemProduto['tmp_name'])."-".$imagemProduto['name']);

    $sql = "INSERT INTO tb_imagem_produtos (fk_id_produto,url) VALUES ($ultimoId,'$nomeImagem')";

    $queryImagem = mysqli_query($conexao,$sql);

    move_uploaded_file($imagemProduto['tmp_name'],"../../imagemBancoDeDados/produtos/$nomeImagem");
}

?>