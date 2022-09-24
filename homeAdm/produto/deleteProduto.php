<?php

include '../../conexao/conexao.php';

$id = 20; //Quando tiver a tabela o id vai vir por á :) 

$sqlImagens = "SELECT * FROM tb_imagem_produtos WHERE fk_id_produto = $id";
$imagens = mysqli_query($conexao,$sqlImagens);

while($imagem = mysqli_fetch_array($imagens)){
    try{
        unlink("../../imagemBancoDeDados/produtos/".$imagem['url']);
    }catch(Exception $e){
        
    }
}

$sqlDeletaImagem = "DELETE FROM tb_imagem_produtos WHERE fk_id_produto = $id";
mysqli_query($conexao,$sqlDeletaImagem);

$sqlDeletaProduto = "DELETE FROM `tb_produtos` WHERE $id";
mysqli_query($conexao,$sqlDeletaProduto);


?>