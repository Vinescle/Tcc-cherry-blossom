<?php
include '../../conexao/conexao.php';
$sql = "SELECT * FROM tb_marcas";
$resultadoMarcas = mysqli_query($conexao,$sql);

$sql = "SELECT * FROM tb_categoria";
$resultadoCategorias = mysqli_query($conexao,$sql);

$sql = "SELECT * FROM tb_sub_categoria";
$resultadoSubCategoria = mysqli_query($conexao,$sql);

?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="cadastroGravaProduto.php" method="POST" enctype="multipart/form-data" >
        <label>Nome do produto</label>
        <input type="text" name="nomeProduto"><br><br>
        <label>Descrição do produto</label>
        <textarea name="descricaoProduto"  cols="30" rows="10"></textarea><br><br>
        <label>Marca</label>
        <select name="idmarca" >
            <option selected></option>
            <?php 
                while($resultado = mysqli_fetch_array($resultadoMarcas)){
                ?>
                    <option value="<?php echo $resultado['id_marca'];?>"><?php echo $resultado['nome_marca'];?></option>
                <?php
                }
            ?>
        </select>
        <label>Categoria</label>
        <select name="idcategoria" >
            <option selected></option>
            <?php 
                while($resultado = mysqli_fetch_array($resultadoCategorias)){
                ?>
                <option value="<?php echo $resultado['id_categoria'];?>"><?php echo $resultado['nome_categoria'];?></option>
                <?php
                }
            ?>
        </select>
        <label>Subcategoria</label>
        <select name="idsubcategoria" >
            <option selected></option>
            <?php 
                while($resultado = mysqli_fetch_array($resultadoSubCategoria)){
                ?>
                <option value="<?php echo $resultado['id_sub_categoria'];?>"><?php echo $resultado['nome_sub_categoria'];?></option>
                <?php
                }
            ?>
        </select><br><br>
        <label>Preço do produto</label>
        <input type="text" name="precoProduto"><br><br>
        <label>Quantidade do produto</label>
        <input type="text" name="quantidadeProduto"><br><br>
        <label>Visualização da 3D</label>
        <input type="text" name="URLProduto"><br><br>
        <label>Peso do produto</label>
        <input type="text" name="pesoProduto"><br><br>
        <label>Altura do produto</label>
        <input type="text" name="alturaProduto"><br><br>
        <label>Largura do produto</label>
        <input type="text" name="larguraProduto"><br><br>
        <label>Profundidade/comprimento do produto</label>
        <input type="text" name="profundidadeProduto"><br><br>
        <input type="file" method="POST" name="imagemProduto-1"><input type="file" method="POST" name="imagemProduto-2"><br><br>
        <input type="file" method="POST" name="imagemProduto-3"><input type="file" method="POST" name="imagemProduto-4"><br><br>
        <input type="file" method="POST" name="imagemProduto-5"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>