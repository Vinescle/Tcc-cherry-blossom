<?php
include './conexao.php';

if (isset($_GET['nomeMarca'])) {
    $sqlMarcas = "SELECT * FROM tb_marcas WHERE nome_marca LIKE '%$_GET[nomeMarca]%' LIMIT 25";
} else {
    $sqlMarcas = "SELECT * FROM tb_marcas LIMIT 25";
}
$resultadoMarcas = mysqli_query($conexao, $sqlMarcas);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/rodape.css" rel="stylesheet">

    <link href="<?php echo $rota; ?>/assets/css/homeMarcas.css" rel="stylesheet">

    <title>Cherry - Marcas</title>
</head>

<body>

    <?php
    include('./componentes/menu-cabecalho.php');
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="input-container">
                <form action="?" method="GET">
                    <input class="input-pesquisa" type="search" name="nomeMarca">
                </form>

            </div>

            <div class="marcas-container">
                <?php
                while ($resultadoMarcasFinal = mysqli_fetch_array($resultadoMarcas)) {
                ?>
                    <a href="<?php echo $rota; ?>/pesquisa.php?marca=<?php echo $resultadoMarcasFinal['id_marca']; ?>">
                        <div class="bolas-marcas">
                            <div class="marca-circulo" style="background-color: <?php echo $resultadoMarcasFinal['cor_marca']; ?>">
                                <div class="marca-overlay"></div>
                                <label class="label-marca" for="checkbox-<?php echo $resultadoBolas['id_marca'] ?>">
                                    <?php echo $resultadoMarcasFinal['nome_marca'] ?>
                                </label>
                                <div>
                                    <img src="<?php echo $rota; ?>/assets/imagens/storage/marcas/<?php echo $resultadoMarcasFinal['icon_url'] ?>" class="imagem-marcas">
                                </div>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <?php
    include('./componentes/rodape.php');
    ?>

    <?php
    include('./imports.php');
    ?>
</body>

</html>