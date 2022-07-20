<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Cherry Blossom - Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');

        * {
            color: #323232;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-image: url(../imagens/background/papel1.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }

        .conteiner {
            padding: 0% 3% 0.5% 3%;
            width: 837px;
            background: #FCFFD7;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin: 5% 25% 10% 25%;
            border-radius: 20px;
            box-shadow: 4px 4px 10px -1px rgba(0, 0, 0, 0.32)
        }

        .conteiner-titulo {
            width: 256px;
            border-bottom: 2px solid #323232;
        }

        .conteiner-titulo p {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0 10px 0;
        }

        .config-tamanho {
            width: 642px;
            height: 52px;
            border: solid 1px #FF97F2;
            border-radius: 20px;
            padding-left: 70px;
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            outline: none;
        }

        .input-text {
            font-size: 24px;
            font-weight: 700;
            margin-left: 14px;
            font-family: 'Inter', sans-serif;
        }

        .input-corpo {
            position: relative;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .input {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .icon-config {
            width: 40px;
            height: 40px;
        }


        .input-button {
            width: 62px;
            height: 54px;
            border-radius: 18px;
            border: none;
            background-color: #FF97F2;
            position: absolute;
            top: 1px;
            left: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .div-checkbox {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
        }

        .checkbox{
            display: flex;
            align-items: center;
            gap: 2px;
            font-family:'Inter', sans-serif;
            font-weight: 400;
            font-size: 20px;
        }

        .checkbox input[type="checkbox"]{
            cursor: pointer;
            width: 30px;
            height: 30px;
            appearance: none;
            -webkit-appearance: none;
            border: 1px solid #FF97F2;
            border-radius: 10px;
            background-color: #FFFFFF;

        }

        .checkbox input[type="checkbox"]:checked:after{
            display: block;
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            content: "x";
            display: flex;
            align-items: center;
            justify-content: center;

        }


        .checkbox a{
            color: #1467FF;
            font-weight: 400;
        }

        .form-end {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3px;
        }

        .form-end-submit input {
            font-size: 24px;
            font-weight: bold;
            width: 200px;
            height: 44px;
            background-color: #FF97F2;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.40S;

        }

        .form-end-submit input:hover {
            background-color: #EC55D9;
            cursor: pointer;
        }

        .form-end-text p {
            font-size: 20px;
            font-weight: 400;
        }

        .form-end-text a {
            color: #1467FF;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <div class="conteiner">
        <div class="conteiner-titulo">
            <p>Cadastro</p>
        </div>
        <form action="#" method="post">
            <div class="input">
                <div>
                    <label class="input-text">Nome Completo</label>
                </div>
                <div class="input-corpo">
                    <button class="input-button" type="submit" disabled>
                        <ion-icon class="icon-config carta" name="person-circle-outline"></ion-icon>
                    </button>
                    <input class="config-tamanho" type="email" name="email">
                </div>
            </div>
            <div class="input">
                <div>
                    <label class="input-text">E-mail</label>
                </div>
                <div class="input-corpo">
                    <button class="input-button" type="submit" disabled>
                        <ion-icon class="icon-config carta" name="mail-outline"></ion-icon>
                    </button>
                    <input class="config-tamanho" type="email" name="email">
                </div>
            </div>
            <div class="input">
                <div>
                    <label class="input-text">Senha</label>
                </div>
                <div class="input-corpo">
                    <button class="input-button" disabled>
                        <ion-icon class="icon-config" name="lock-open-outline"></ion-icon>
                    </button>
                    <input class="config-tamanho" type="password" name="senha">
                </div>
            </div>
            <div class="input">
                <div>
                    <label class="input-text">Confirmar Senha</label>
                </div>
                <div class="input-corpo">
                    <button class="input-button" disabled>
                        <ion-icon class="icon-config" name="lock-closed-outline"></ion-icon>
                    </button>
                    <input class="config-tamanho" type="password" name="senha">
                </div>
            </div>
            <div class="input">
                <div>
                    <label class="input-text">Data de Nascimento</label>
                </div>
                <div class="input-corpo">
                    <button class="input-button" disabled>
                        <ion-icon class="icon-config" name="calendar-outline"></ion-icon>
                    </button>
                    <input class="config-tamanho" type="text" name="senha">
                </div>
            </div>
            <div class="input">
                <div>
                    <label class="input-text">CPF</label>
                </div>
                <div class="input-corpo">
                    <button class="input-button" disabled>
                        <ion-icon class="icon-config" name="document-text-outline"></ion-icon>
                    </button>
                    <input class="config-tamanho" type="text" name="senha">
                </div>
            </div>
            <div class="div-checkbox">
                <div class="checkbox">
                    <input type="checkbox">
                    <span>Desejo receber emails sobre futuras ofertas e novos produtos.</span>
                </div>
                <div class="checkbox">
                    <input type="checkbox">
                    <span>Declaro que li e concordo com os <a href="#">termos de uso </a>e <a href="#">políticas de<br>
                    privacidade.</a></span>
                </div>
            </div>
            <div class="form-end">
                <div class="form-end-submit">
                    <input type="submit" value="Cadastrar" name="senha">
                </div>
                <div class="form-end-text">
                    <p>Já tem uma conta? Faça <a href="#">login</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>