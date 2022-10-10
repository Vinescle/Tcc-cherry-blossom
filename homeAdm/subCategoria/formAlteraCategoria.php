<?php
include '../../conexao/conexao.php';
$sql = "SELECT * FROM tb_categoria";
$categorias = mysqli_query($conexao,$sql);
$id = 3; // Recebe via POST

$sqlSubCategoria = "SELECT * FROM tb_sub_categoria WHERE id_sub_categoria = $id";
$resultadoSubCategoria = mysqli_fetch_array(mysqli_query($conexao,$sqlSubCategoria));
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de grupo</title>
</head>
<body>
    <form action="cadastroAlteraSubCategoria.php" method="POST">
        <input  type="text" name="id_sub_categoria" value="<?php echo $resultadoSubCategoria['id_sub_categoria']?>">
        <select name="fk_id_categoria" >
            <?php 
                while($resultado = mysqli_fetch_array($categorias)){
                    if($resultado['id_categoria'] == $resultadoSubCategoria['fk_id_categoria']){
                    ?>
                        <option selected value="<?php echo $resultado['id_categoria'];?>"><?php echo $resultado['nome_categoria'];?></option>
                    <?php
                    }else{
                    ?>
                        <option value="<?php echo $resultado['id_categoria'];?>"><?php echo $resultado['nome_categoria'];?></option>
                    <?php
                    }
                ?>
                <?php
                }
            ?>
        </select>
        <label>Nome da Subcategoria</label>
        <input type="text" name="nome_sub_categoria" value="<?php echo $resultadoSubCategoria['nome_sub_categoria']?>">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>