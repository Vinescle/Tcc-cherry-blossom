<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');

        .lista-menu {
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

        .lista-menu {
            display: none;
        }

        .menu-checkbox:checked~.lista-menu {
            display: block;
        }

        .menu-checkbox {
            display: none;
        }

        .titulo-lista {
            font-family: 'Inter';
            font-weight: 700;
            font-size: 18px;
            color: #515151;
        }

        .titulo-texto {
            font-family: 'Inter';
            font-weight: 400;
        }

        .lista-texto {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .botao-pesquisa {
            background: url('./src-icons/lupa.svg');
            background-position: 0.5em;
            background-size: 16px;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <header class="cabecalho">
        <div class="cabecalho-logo">
            <img src="../imagens/site/Logo_PNG_normal.png" class="logo-menu">
            <div class="cabecalho-menu">
                <ion-icon class="icones-cabecalho_menu" name="menu"></ion-icon>
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
            <ion-icon name="cart-outline" class="icones-cabecalho icone-cabecalho_pesquisa"></ion-icon>

            <input type="checkbox" id="menu" class="menu-checkbox">
            <label for="menu">
                <ion-icon name="person-circle-outline" class="icones-cabecalho icone-cabecalho_pesquisa"></ion-icon>
            </label>
            <ul class="lista-menu">
                <li class="titulo-lista">Administrador</li>
                <div class="lista-texto">
                    <li class="titulo-texto"><a href="./cadastro-e-login/php/login.php">Painel</a></li>
                    <li class="titulo-texto"><a href="./cadastro-e-login/php/cadastro.php">Sair</a></li>
                </div>
            </ul>
        </div>
    </header>
</body>

</html>