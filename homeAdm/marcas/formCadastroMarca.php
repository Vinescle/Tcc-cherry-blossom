<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de marcas</title>

    <link href="../../css/reset.css" rel="stylesheet">
    <link href="../../css/estilo-home.css" rel="stylesheet">
    <link href="../../css/menuAdm.css" rel="stylesheet">
    <link href="../../css/marcas/marcas.css" rel="stylesheet">
</head>

<body>
    <?php
    include '../../Componentes/cabecalhoHomeAdm.php';
    ?>

    <div style="display: flex;">
        <?php include '../../Componentes/menuAdm.php'; ?>
    </div>

    <div class="conteudo-principal">
        <div class="main">
            <form action="cadastroGravaMarca.php" method="POST" enctype="multipart/form-data">
                <div class="input-marca">
                    <label class="label-texto">Nome da marca</label>
                    <div>
                        <ion-icon class="botao-icone" name="balloon-outline"></ion-icon>
                        <input class="input-campo" type="text" name="nomeMarca"><br><br>
                    </div>
                </div>

                <label class="label-texto">Ícone</label>
                <div class="input-conjunto_cor">
                    <div class="input-caixa_cor">
                        <div class="input-arquivo_botao">
                            <button class="botao-banner">
                                <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                <input type="file" name="iconUrl">
                            </button>
                        </div>

                        <div class="conjunto-seleciona_cor">
                            <input type="color" name="corMarca" value="#ff0000">
                            <input type="text" value="#ff0000">
                        </div>
                    </div>
                    <input type="submit" value="Salvar">
                </div>
            </form>
        </div>
    </div>

    <!-- <script src="./js/verificaIconPagina.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>