<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, user-scalable=no">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');

        * {
            box-sizing: border-box;
            color: #323232;
            font-family: 'Inter', sans-serif;
            margin: 0px;
            padding: 0px;
        }

        .popup {
            display: none;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 4px 4px 10px -1px rgba(0, 0, 0, 0.32);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

        }

        .popup.mostrar{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .popup-conteudo {
            position: relative;
            background-color: #FCFFD7;
            width: 730px;
            height: 400px;
            border-radius: 30px;
            margin: 60px;

        }


        .popup-icone-close{
            border: none;
            background-color: transparent;
            font-size: 40px;
            position: absolute;
            top: 5%;
            left: 92%;
        }

        .popup-config {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .popup-cabecalho {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .popup-icone-svg{
            margin: 4vh 0 0 0;
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
            margin-bottom: 0px;
        }

        .popup-texto {
            color: #323232;
            font-family: 'Inter', sans-serif;
            font-size: 24px;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .config-tamanho {
            width: 34.5vw;
            height: 5vh;
            border: solid 1px #FF97F2;
            border-radius: 20px;
            padding-left: .8vw;
            font-size: 18px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            outline: none;
        }

        .popup-form-button {
            font-family: 'Inter', sans-serif;
            font-size: 22px;
            font-weight: bold;
            color: #FFFFFF;
            width: 200px;
            height: 45px;
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


    <div id="sugestaoProduto" class="popup">
        <div class="popup-conteudo">
            <div class="popup-fechar" ><button class="popup-icone-close"><ion-icon id='fechar' name="close-outline"></button></ion-icon></div>
            <div class="popup-config">
                <div class="popup-cabecalho">
                    <div class="popup-icone">
                        <ion-icon class="popup-icone-svg" name="brush-outline"></ion-icon>
                    </div>
                    <p class="popup-titulo">Sugestão de Produto</p>
                    <p class="popup-texto">Compartilhe suas ideias para temas e produtos!</p>
                </div>
                <form class="popup-form" action="./src-sugestaoProduto/enviaSugestaoProduto.php" method="POST">
                    <input class="config-tamanho" type="text" name="sugestaoProduto" placeholder="Digite sua sugestão">
                    <input class="popup-form-button" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>