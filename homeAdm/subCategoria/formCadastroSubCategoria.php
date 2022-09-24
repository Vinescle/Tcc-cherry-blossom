<?php
include '../../conexao/conexao.php';
$sql = "SELECT * FROM tb_categoria";
$categorias = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro sub Categoria</title>
</head>
<body>
    <form action="cadastroGravaSubCategoria.php" method="POST">
        <label>Nome da subcategoria</label>
        <input type="text" name="subcategoria">
        <label>Categoria:</label>
        <select name="idcategoria" >
            <?php 
                while($resultado = mysqli_fetch_array($categorias)){
                ?>
                <option value="<?php echo $resultado['id_categoria'];?>"><?php echo $resultado['nome_categoria'];?></option>
                <?php
                }
            ?>
        </select>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>