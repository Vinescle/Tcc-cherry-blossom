<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="../imagens/site/Logo_PNG_normal.png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');

        .login-menu {
            box-shadow: 5px 5px 5px 0px #515151;
            background-color: #FCFFD7;
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 60px;
            margin-left: 28%;
            padding: 0.7em;
            border-radius: 16px;
            gap: 10px;
        }

        .categorias-menu {
            box-shadow: 5px 5px 5px 0px #515151;
            background-color: #FCFFD7;
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 60px;
            padding: 0.7em;
            border-radius: 16px;
            gap: 10px;
        }

        .login-menu, .categorias-menu {
            display: none;
        }

        .login-checkbox:checked~.login-menu, .categorias-checkbox:checked~.categorias-menu {
            display: block;
        }

        .login-checkbox, .categorias-checkbox {
            display: none;
        }

        .titulo-login, .titulo-categorias {
            font-family: 'Inter';
            font-weight: 700;
            font-size: 18px;
            color: #515151;
            padding-bottom: 0.5em;
        }

        .titulo-texto {
            font-family: 'Inter';
            font-weight: 400;
            padding-bottom: 0.25em;
        }

        .login-texto, .categorias-texto {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .formulario-pesquisa {
            display: flex;
            background-color: white;
            font-family: 'Inter';
            font-size: 13px
        }

        .botao-pesquisa {
            background: url('./src-icons/lupa.svg');
            background-position: 0.5em;
            background-size: 16px;
            background-repeat: no-repeat;
        }

        .robertinho{
            display: block;
        }

    </style>
</head>

<body>
    <header class="cabecalho">
        <div class="cabecalho-logo">
            <img src="./imagens/site/Logo_PNG_normal.png" class="logo-menu">
            <div class="cabecalho-menu">
                <input type="checkbox" id="menu-categorias" class="categorias-checkbox">
                <label for="menu-categorias">
                    <img src="./src-icons/menu.svg" class="icones-cabecalho_menu" id="checkboxMenu">
                </label>

                <ul class="categorias-menu">
                    <li class="titulo-categorias">Categorias</li>
                    <div class="categorias-texto">
                        <li class="titulo-texto">Papercraft</li>
                        <li class="titulo-texto">Hama Beads</li>
                        <li class="titulo-texto">Macramê</li>
                        <li class="titulo-texto">Miçangas</li>
                    </div>
                </ul>
                <h2 class="botao-menu">MENU</h2>
            </div>
        </div>
        <div class="cabecalho-pesquisa">
            <form>
                <div class="formulario-pesquisa">
                    <button class="botao-enviar" type="submit">
                    </button>
                    <input class="botao-pesquisa" type="TEXT">
                </div>
            </form>
            <img src="./src-icons/carrinho.svg" class="icones-cabecalho icone-cabecalho_pesquisa">

            <input type="checkbox" id="menu-login" class="login-checkbox">
            <label for="menu-login">
                <img src="./src-icons/pessoa.svg" class="icones-cabecalho icone-cabecalho_pesquisa" id="checkboxUser">
            </label>

            <ul class="login-menu">
                <li class="titulo-login">Perfil</li>
                <div class="login-texto">
                    <li class="titulo-texto"><a href="./cadastro-e-login/php/login.php">Login</a></li>
                    <li class="titulo-texto"><a href="./cadastro-e-login/php/cadastro.php">Registrar</a></li>
                </div>
            </ul>
        </div>
    </header>
</body>

</html>