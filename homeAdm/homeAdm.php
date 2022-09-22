<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry Blossom - Adm</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/menuAdm.css" rel="stylesheet">
    <link href="../css/homeAdm/homeAdm.css" rel="stylesheet">

    <style>
        .icone-selecionado {
            background-color: #EC55D9;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <?php
    include '../Componentes/cabecalhoHomeAdm.php';
    ?>
    <div class="conteudo-principal">
        <div style="display: flex;">
            <?php include '../Componentes/menuAdm.php'; ?>
        </div>

        <div class="dados">
            <div class="dados-tabelas">
                <div class="tabela">
                    <h3 class="tabela-numero">XX.XXX</h3>
                    <p class="tabela-titulo">Visitas</p>
                    <div class="tabela-conjunto_porcentagem">
                        <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                        <p class="tabela-porcentagem">XXX</p>
                    </div>
                </div>

                <div class="tabela">
                    <h3 class="tabela-numero">X.XXX</h3>
                    <p class="tabela-titulo">Vendas</p>
                    <div class="tabela-conjunto_porcentagem">
                        <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                        <p class="tabela-porcentagem">XXX</p>
                    </div>
                </div>

                <div class="tabela">
                    <h3 class="tabela-numero">R$X.XXX</h3>
                    <p class="tabela-titulo">Lucros</p>
                    <div class="tabela-conjunto_porcentagem">
                        <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                        <p class="tabela-porcentagem">XXX</p>
                    </div>
                </div>

                <div class="tabela">
                    <h3 class="tabela-numero">XXX</h3>
                    <p class="tabela-titulo">Inscritos</p>
                    <div class="tabela-conjunto_porcentagem">
                        <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                        <p class="tabela-porcentagem">XXX</p>
                    </div>
                </div>
            </div>

            <div class="dados-graficos">
                <div class="grafico">

                </div>

                <div class="grafico">

                </div>
            </div>
        </div>
    </div>
    <input type="text" value="1" id="pagina-verificacao" style="display:none;">

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>