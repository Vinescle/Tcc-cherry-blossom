<?php

include '../../conexao.php';
include '../../verifica-logado.php';
$nomeCategoria = $_POST['nomeCategoria'];

$sqlCategoria = "SELECT * FROM tb_categoria";
$resultadoCategoria = mysqli_query($conexao,$sqlCategoria);

$categoriaRepetida = false; 
while($resultado = mysqli_fetch_array($resultadoCategoria)){
    if($nomeCategoria == $resultado['nome_categoria']){
        $categoriaRepetida = true;
    }
}
if($categoriaRepetida == true){
    echo "<script> alert('Nome de categoria já existente'); window.location.href='$rota/home-adm/categorias.php';</script>";
    exit();
}

$sql = "INSERT INTO tb_categoria(nome_categoria) VALUES ('$nomeCategoria')";
mysqli_query($conexao, $sql);

header("location:../categorias.php");
