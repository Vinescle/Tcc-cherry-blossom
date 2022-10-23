<?php
$page = 'categorias';
include '../../conexao.php';
if(count($_GET['idSubCategoria']) > 1){
    echo "<script> alert('Selecione apenas um item'); window.location.href='$rota/home-adm/categorias.php';</script>"; 
    // header("location:$rota/home-adm/gerenciar.php");
}
include '../../verifica-logado.php';
$idSubCategoria = $_GET['idSubCategoria'][0];
$sql = "SELECT * FROM tb_sub_categoria where id_sub_categoria = $idSubCategoria";
$subcategorias = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($subcategorias);
$sql = "SELECT * FROM tb_categoria";
$categorias = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-lateral.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/produtos/form-cadastro.css" rel="stylesheet">
    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../../componentes/menu-cabeçalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <form action="alteraSubCategoria.php" method="POST">
                    <div class="input-container-form-produto">

                        <div class="w-100">
                            <label class="input-texto">Categoria</label>
                            <div class="input-container">
                                <button class="botao-input" disabled="">
                                    <ion-icon class="icone-input md hydrated" name="balloon-outline"></ion-icon>
                                </button>
                                <select class="input-conjunto input-tiktok" name="idcategoria">
                                    <?php
                                    
                                    while ($resultado = mysqli_fetch_array($categorias)) {
                                        if($resultado['id_categoria'] == $linha['fk_id_categoria']){
                                            ?>
                                            <option selected value="<?php echo $resultado['id_categoria']; ?>"><?php echo $resultado['nome_categoria']; ?></option>
                                            <?php
                                        }else{
                                    ?>
                                        <option value="<?php echo $resultado['id_categoria']; ?>"><?php echo $resultado['nome_categoria']; ?></option>
                                    <?php
                                    }}
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="w-160">
                            <label class="input-texto">Nome da categoria</label>
                            <div class="input-container">
                                <button class="botao-input" disabled="">
                                    <ion-icon class="icone-input md hydrated" name="pricetag-outline"></ion-icon>
                                </button>
                                <input class="input-conjunto input-tiktok" value="<?php echo $linha['nome_sub_categoria']?>" type="text" name="nomeSubcategoria">
                                <input class="input-conjunto input-tiktok" style="display: none;" value="<?php echo $linha['id_sub_categoria']?>" type="text" name="idsubcategoria">
                            </div>
                        </div>
                    </div>
                    <div class="input-salvar">
                        <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php
        include('../../imports.php');
        ?>
</body>

</html>