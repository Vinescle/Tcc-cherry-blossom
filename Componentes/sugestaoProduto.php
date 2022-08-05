<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');

        * {
            color: #323232;
            font-family: 'Inter', sans-serif;
            margin: 0px;
            padding: 0px;
        }

        .popup {
            background-color: rgba(0, 0, 0, .5);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .popup-conteudo {
            position: relative;
            background-color: #FCFFD7;
            width: 42vw;
            height: 40vh;
            border-radius: 30px;
            margin: 60px;

        }

        .popup-config {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .popup-cabecalho {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .popup-icone-svg{
            font-size: 90px;

        }

        .popup-titulo {
            color: #323232;
            font-family: 'Inter', sans-serif;
            padding: 0px 0px 10px 0px;
            border-bottom: 2px solid #323232;
            width: 20vw;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .popup-texto {
            color: #323232;
            font-family: 'Inter', sans-serif;
            font-size: 24px;
            font-weight: normal;
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .config-tamanho {
            width: 642px;
            height: 52px;
            border: solid 1px #FF97F2;
            border-radius: 20px;
            padding-left: 0.8%;
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            outline: none;
        }

        .popup-form-button {
            font-size: 24px;
            font-weight: bold;
            color: #FFFFFF;
            width: 200px;
            height: 44px;
            background-color: #FF97F2;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.40S;

        }

        .popup-form-button:hover {
            background-color: #EC55D9;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <div class="popup">
        <div class="popup-conteudo">
            <div class="popup-fechar">X</div>
            <div class="popup-config">
                <div class="popup-cabecalho">
                    <div class="popup-icone">
                        <ion-icon class="popup-icone-svg" name="brush-outline"></ion-icon>
                    </div>
                    <p class="popup-titulo">Sugestão de Produto</p>
                    <p class="popup-texto">Compartilhe suas ideias para temas e produtos!</p>
                </div>
                <form class="popup-form">
                    <input class="config-tamanho" type="text" name="sugestao" placeholder="  Digite sua sugestão">
                    <input class="popup-form-button" type="submit">
                </form>
            </div>


        </div>

    </div>
</body>

</html>