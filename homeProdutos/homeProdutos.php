<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry-Blossom</title>

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/homeProdutos/homeProdutos.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        .main {
            width: 100%;

            display: flex;
            flex-direction: column;
        }

        /* Tag do produto */

        .div-tags {
            margin: 0.5rem 0;
        }

        .div-tags_texto {
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            color: #323232;
        }

        /* Imagens */

        .div-imagens {
            display: flex;
            flex-direction: column;
            
            gap: 0.5rem;

            width: 40%;
        }

        .imagem-principal {
            width: 100%;
            height: 200px;

            background-color: lightgray;
            border: solid 1px none;
            border-radius: 10px;
        }

        .imagens-pequenas {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .botao-banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            position: relative;

            border-radius: 10px;

            width: 3rem;
            height: 3rem;
        }

        .botao-banner input[type="button"] {
            cursor: pointer;
            opacity: 0;

            position: absolute;

            border-radius: 10px;

            width: 100%;
            height: 100%;
        }

        /* Informações do Produto */

        .informacoes-titulo {
            font-family: 'Inter';
            font-size: 18px;
            font-weight: 700;
            color: #323232;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="div-tags">
            <label class="div-tags_texto">Hama Beads > Chaveiros</label>
        </div>

        <div class="div-imagens">
            <div class="conjunto-imagens">
                <div class="imagem-principal">
                </div>
            </div>

            <div class="imagens-pequenas">
                <div class="conjunto-imagens">
                    <button class="botao-banner">
                        <input type="button">
                    </button>
                </div>

                <div class="conjunto-imagens">
                    <button class="botao-banner">
                        <input type="button">
                    </button>
                </div>

                <div class="conjunto-imagens">
                    <button class="botao-banner">
                        <input type="button">
                    </button>
                </div>

                <div class="conjunto-imagens">
                    <button class="botao-banner">
                        <input type="button">
                    </button>
                </div>

                <div class="conjunto-imagens">
                    <button class="botao-banner">
                        <input type="button">
                    </button>
                </div>
            </div>
        </div>

        <div class="div-informacoes">
            <label class="informacoes-titulo">Chaveiro Palhaçu Título Longo Só Pra Exemplificar</label>
            
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>