<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de grupo</title>

    <link href="../../css/reset.css" rel="stylesheet">
    <link href="../../css/estilo-home.css" rel="stylesheet">
    <link href="../../css/menuAdm.css" rel="stylesheet">
    <link href="../../css/categorias/categorias.css" rel="stylesheet">

    <style>
        .conteudo-principal {
            display: flex;
            flex-wrap: wrap;

            width: calc(100% - 107px);
            margin-left: 107px;
            margin-top: 2rem;
        }

        .main {
            width: 100%;
            padding: 0 40px;
        }

        /* Input Formulário */

        .formulario-funcoes {
            display: flex;
            justify-content: space-between;

            width: 100%;
        }

        .formulario-texto {
            width: 80%;
        }

        .input-conjunto {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .botao-texto {
            border: solid 1px #FF84F0;
            border-radius: 10px;

            width: 100%;
            height: 23px;

            outline: none;

            padding-left: 35px;
        }

        .label-texto {
            margin: 0 0 0 10px;

            font-family: 'Inter';
            font-size: 14px;
            font-weight: 700;
            color: #323232;
        }

        /* Ícone Formulário */

        ion-icon {
            font-size: 20px;
        }

        .botao-icone {
            position: absolute;
            background-color: #FF84F0;
            border: none;
            border-radius: 10px 0 0 10px;

            padding: 0px 6px;
            height: 26px;
        }

        .botao-icone {
            color: #FFF;
            background-color: #FF84F0;
        }

        /* Botão Salvar */

        .input-salvar {
            margin-top: 23px;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .input-salvar input[type="submit"] {
            cursor: pointer;
            position: absolute;

            opacity: 0;

            width: 131px;
            height: 26px;

            left: 0;
            top: 0;
        }

        .botao-salvar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            gap: 5px;

            position: relative;

            font-size: 16px;
            font-weight: 500;
            font-family: 'Inter';
            color: #FFF;

            width: 130px;
            height: 25px;

            background-color: #FF84F0;
            border: solid 2px #FF84F0;
            border-radius: 13px;

            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php
    include '../../Componentes/cabecalhoHomeAdm.php';
    ?>

    <div style="display: flex;">
        <?php include '../../Componentes/formMenuAdm.php'; ?>
    </div>

    <div class="conteudo-principal">
        <div class="main">
            <form action="cadastroGravaCategoria.php" method="POST">
                <div class="formulario-funcoes">
                    <div class="input-conjunto">
                        <label class="label-texto">Nome da categoria</label>
                        <div class="formulario-texto">
                            <ion-icon class="botao-icone" name="pricetag-outline"></ion-icon>
                            <input class="botao-texto" type="text" name="nomeCategoria">
                        </div>
                    </div>

                    <div class="input-salvar">
                        <button class="botao-salvar">
                            <input class="botao-salvo" type="submit" value="Salvar">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>