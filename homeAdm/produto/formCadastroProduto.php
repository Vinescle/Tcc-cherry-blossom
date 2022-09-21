<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="cadastroGravaProduto.php" method="POST">
        <label>Nome do produto</label>
        <input type="text" name="nomeProduto"><br><br>
        <label>Descrição do produto</label>
        <textarea name="descricaoProduto"  cols="30" rows="10"></textarea><br><br>
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
        <input type="file" name="imagemProduto-1"><input type="file" name="imagemProduto-2"><br><br>
        <input type="file" name="imagemProduto-3"><input type="file" name="imagemProduto-4"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>