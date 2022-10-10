<?php
include '../../conexao/conexao.php';
$id = 4; // huh
$sql = "SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_categoria = $id";
$resultado = mysqli_fetch_array(mysqli_query($conexao,$sql));
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de grupo</title>
</head>
<body>
    <form action="cadastroAlteraCategoria.php" method="POST">
        <input style="display:none;" type="text" name="idCategoria" value="<?php echo $resultado['id_categoria']?>">
        <label>Nome Categoria</label>
        <input type="text" name="nomeCategoria" value="<?php echo $resultado['nome_categoria']?>">
        <input type="submit" value="Cadatrar">
    </form>
</body>
</html>