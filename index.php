<?php
include './conexao.php';

if (isset($_GET['deslogar'])) {
    unset($_SESSION['id_usuario']);
    unset($_SESSION['logado']);
    session_destroy();
}


// CONFIGURAÇÕES E INSERTS DAS TABELAS DE VISITAS
$sqlVisita = "INSERT INTO tb_log_visitas (data_visita) VALUES (NOW())";
mysqli_query($conexao,$sqlVisita);
$ultimoIdVisita = mysqli_insert_id($conexao);
$sqlUltimaVisita = "SELECT DATE_FORMAT(data_visita,'%m') FROM tb_log_visitas WHERE id_log_visita = $ultimoIdVisita";
$resultadoUltimoId = mysqli_query($conexao, $sqlUltimaVisita);
$resultadoUltimoId = mysqli_fetch_array($resultadoUltimoId);
$fk_id_mes = $resultadoUltimoId[0];
$sqlUltimaVisita = "UPDATE tb_log_visitas SET fk_id_mes = $fk_id_mes WHERE id_log_visita = $ultimoIdVisita";
mysqli_query($conexao, $sqlUltimaVisita);



$sqlMarcas = "SELECT * FROM tb_marcas LIMIT 7";
$resultadoMarcas = mysqli_query($conexao, $sqlMarcas);

$sqlDestaques = "SELECT a.id_produtos,
a.nome_produto,
a.descricao_produto,
a.preco_produto,
a.qtd_produto,
b.url,
e.nome_categoria,
d.nome_sub_categoria
FROM tb_produtos a
INNER JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria
GROUP BY a.id_produtos
LIMIT 8";
$resultadoDestaques = mysqli_query($conexao, $sqlDestaques);

$sqlMaisVendidos = "SELECT a.id_produtos,
a.nome_produto,
a.descricao_produto,
a.preco_produto,
a.qtd_produto,
b.url,
e.nome_categoria,
d.nome_sub_categoria
FROM tb_produtos a
INNER JOIN tb_imagem_produtos b ON a.id_produtos = b.fk_id_produto
INNER JOIN tb_produtos_sub_categorias c ON c.fk_id_produtos = a.id_produtos
INNER JOIN tb_sub_categoria d ON d.id_sub_categoria = c.fk_id_sub_categorias
INNER JOIN tb_categoria e ON e.id_categoria = d.fk_id_categoria 
GROUP BY id_produtos
LIMIT 4";
$resultadoMaisVendidos = mysqli_query($conexao, $sqlMaisVendidos);

$sqlConfigAdm = "SELECT * FROM tb_adm_config";
$resultadoConfigAdm = mysqli_query($conexao, $sqlConfigAdm);
$configAdm = mysqli_fetch_array($resultadoConfigAdm);

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

    <title>Cherry Blossom - Home</title>
</head>

<body>
    <?php
    include('./componentes/menu-cabeçalho.php');
    ?>


    <?php
    include('./componentes/rodape.php');
    ?>

    <?php
    include('./imports.php');
    ?>
</body>

</html>