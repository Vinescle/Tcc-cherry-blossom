<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry Blossom - Adm</title>
    <link href="./css/reset.css" rel="stylesheet">
    <link href="./css/estilo-home.css" rel="stylesheet">
    <link href="./css/menuAdm.css" rel="stylesheet">

    <style>
        .conteudo-principal {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 19%;
        }

        .estatisticas {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 4%;
        }

        .card-estatisticas {
            min-width: 13%;
            margin-top: 4%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #FF84F0;
            flex-direction: column;
            padding-top: 0.7em;
            padding-right: 4em;
            padding-left: 4em;
            padding-bottom: 0.1em;
            border-radius: 7px;
            font-family: Inter;
            color: white;
        }

        .card-estatisticas-dados {
            margin: 0.5em 0;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .card-estatisticas__grafico {
            font-weight: 700;
            margin: 0;
            font-size: 30px;
        }

        .card-estatisticas__titulo {
            margin: 1em 0 0 0;
            font-size: 14px;
            font-weight: 500;
        }

        .card-estatisticas__contagem {
            width: 300%;
            margin: 1em 0 0 0;
            padding-top: 0.1em;
            border-top: solid 1px white;
            font-size: 14px;
            font-weight: 500;
        }

        .p-card-estatisticas__contagem {
            text-align: center;
        }

        .home-dados {
            margin-left: 10%;
        }

        .graficos-adm {
            display: flex;
            flex-direction: row;
        }

        .graficos-adm-conteudo {
            display: inline-block;
            width: 515px;
            height: 325px;
            padding: 10px 0;
            margin: 30px;
            font-family: Inter;
            font-weight: 700;
            color: #FF84F0;
            border: solid 1px #FF84F0;
            border-radius: 10px;
        }
        
        .icone-selecionado{
            background-color: #EC55D9;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <?php
    include './Componentes/cabecalhoHomeAdm.php';
    ?>
    <div class="conteudo-principal">
        <div style="display: flex;">
            <?php include './Componentes/menuAdm.php'; ?>
        </div>
        <div class="estatisticas">
            <div class="card-estatisticas">
                <div class="card-estatisticas-dados">
                    <h3 class="card-estatisticas__grafico">XX.XXX</h3>
                    <p class="card-estatisticas__titulo">Visitas</p>
                </div>
                <div class="card-estatisticas__contagem">
                    <p class="p-card-estatisticas__contagem">XXX</p>
                </div>
            </div>
            <div class="card-estatisticas">
                <div class="card-estatisticas-dados">
                    <h3 class="card-estatisticas__grafico">X.XXX</h3>
                    <p class="card-estatisticas__titulo">Vendas</p>
                </div>
                <div class="card-estatisticas__contagem">
                    <p class="p-card-estatisticas__contagem">XXX</p>
                </div>
            </div>
            <div class="card-estatisticas">
                <div class="card-estatisticas-dados">
                    <h3 class="card-estatisticas__grafico">R$X.XXX</h3>
                    <p class="card-estatisticas__titulo">Lucros</p>
                </div>
                <div class="card-estatisticas__contagem">
                    <p class="p-card-estatisticas__contagem">XXX</p>
                </div>
            </div>
            <div class="card-estatisticas">
                <div class="card-estatisticas-dados">
                    <h3 class="card-estatisticas__grafico">XXX</h3>
                    <p class="card-estatisticas__titulo">Inscritos</p>
                </div>
                <div class="card-estatisticas__contagem">
                    <p class="p-card-estatisticas__contagem">XXX</p>
                </div>
            </div>
        </div>

        <div class="home-dados">
            <div class="graficos-adm">
                <div class="graficos-adm-conteudo">
                </div>

                <div class="graficos-adm-conteudo">
                </div>
            </div>
        </div>
    </div>
    <input type="text" value="1" id="pagina-verificacao" style="display:none;">

    <script src="./Js-homeAdm/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>