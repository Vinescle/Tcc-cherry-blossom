<?php

include '../../conexao/conexao.php';

$id = 16; //Quando tiver a tabela o id vai vir por á :) 

$sqlMarca = "SELECT id_marca, nome_marca, icon_url, cor_marca FROM tb_marcas WHERE id_marca = $id";
$resultado = mysqli_fetch_array(mysqli_query($conexao,$sqlMarca));
$resultadoIconUrl = $resultado[3];
try{
    unlink("../../imagemBancoDeDados/marcas/".$resultadoIconUrl);
}catch(Exception $e){
        
}

$sqlDeletaMarca = "DELETE FROM tb_marcas where id_marca = $id";
mysqli_query($conexao,$sqlDeletaMarca);
 
?>