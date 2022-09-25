<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de marcas</title>
</head>
<body>
    <form action="cadastroGravaMarca.php" method="POST" enctype="multipart/form-data">
        <label>Nome da marca</label>
        <input type="text" name="nomeMarca"><br><br>
        <input type="file" name="iconUrl"><br><br>
        <input type="color" name="corMarca" value="#ff0000">
        <input type="text" value="#ff0000">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>