<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/cadastro.css">
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
        }

        .conteiner-titulo{
            font-size: 24px;
            font-weight: bold;
        }

        .config-tamanho {
            width: 642px;
            height:52px;
            border: solid 1px #FF97F2;
            border-radius: 20px;
        }

        .input-text{
            font-size: 24px;
            font-weight: bold;
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

        .form-end{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3px;
        }

        .form-end-submit input{
            font-size: 24px;
            font-weight: bold;
            width: 200px;
            height: 44px;
            background-color: #FF97F2;
            border: none;
            border-radius: 20px;

        }

        .form-end-text p{
            font-size: 20px;
            font-weight: 400;
        }

        .form-end-text a{
            color:#2271FD;
        }
    </style>
</head>

<body>
    <div class="conteiner">
        <div class="conteiner-titulo">
            <p>Login</p> 
        </div>
        <form action="#" method="post">
            <div class="input">
                <label class="input-text">E-mail</label>
                <input class="config-tamanho" type="email" name="email">
            </div>
            <div class="input">
                <label class="input-text">Senha</label>
                <input class="config-tamanho" type="password" name="senha">
            </div>
            <div class="form-end">
                <div class="form-end-submit">
                    <input type="submit" value="Entrar" name="senha">
                </div>
                <div class="form-end-text">
                    <p>Ainda não tem uma conta? <a href="#">Cadastre-se</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>