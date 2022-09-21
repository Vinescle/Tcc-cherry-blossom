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
$imagemProduto1 = $_POST['imagemProduto-1'];
$imagemProduto2 = $_POST['imagemProduto-2'];
$imagemProduto3 = $_POST['imagemProduto-3'];
$imagemProduto4 = $_POST['imagemProduto-4'];

$sql = "INSERT INTO tb_produtos(nome_produto, descricao_produto, preco_produto, qtd_produto, visualizacao_url, peso_produto, altura_produto, largura_produto, profundidade_produto) 
VALUES ('$nomeProduto','$descricaoProduto',$precoProduto,$quantidadeProduto,'$URLProduto',$pesoProduto,$alturaProduto,$larguraProduto,$profundidadeProduto)";

//Tem que inserir a imagens

if(mysqli_query($conexao,$sql)){
    echo "deu certo";
}

?>