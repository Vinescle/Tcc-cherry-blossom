<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/menuAdm.css" rel="stylesheet">
    <title>Gerenciamento -- ADM</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');

        .conteudo-principal {
            display: flex;
            flex-direction: row;
            gap: 100px;
        }

        .conteudo-tabela {
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 5%;
            margin: 0 5% 0 0;
        }

        main {
            display: flex;
            flex-direction: column;

            width: 100%;
            height: 100%;
            margin-top: 2%;
            margin-right: 2%;
        }

        .config-gerenciamento {
            outline: none;
            border: 2px solid #FF84F0;
            background-color: #FFFFFF;
            width: 420px;
            height: 30px;
        }

        .config-gerenciamento ion-icon {
            color: #FF84F0;
            border: none;
        }

        .conteudo-acoes {
            display: flex;

        }

        .conteudo-acoes-cadastrar {
            background-color: #FF84F0;
            color: #FFFFFF;
            font-family: 'Inter';
            padding: .4% 2% .4% 2%;
            border-radius: 20px;
            font-size: 20px;
            font-weight: 600;

            transition: .6s;

        }

        .conteudo-acoes-cadastrar:hover {
            background-color: #EC55D9;
            color: #FFFFFF;
        }

        .botoes-acoes {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* th{
            text-align: center;
            color: #FFFFFF;
            background-color: #FF84F0;
        } */

        .titulo-tabela {
            text-align: center;
            color: #FFFFFF;
            background-color: #FF84F0;
            height: 40px;

            padding: 2% 0 0 0;
        }

        .id-tabela {
            width: 8%;
            padding: 2%;
            text-align: center;
        }

        .nome-produto-tabela {
            padding: 2%;
        }

        table,
        td {

            font-size: 24px;
            font-family: 'Inter';
            font-weight: bold;

            border: 2px solid #FF84F0;
            /* text-align: center; */
        }

        .corpo-tabela {
            margin: 2% 0 0 0;
            width: 80%;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;
        }

        .tabela-principal {
            margin-top: 2%;

        }

        .titulo-tabela-principal {
            border: 2px solid #FF84F0;
            padding: 0.4%;

            color: #FF84F0;
            background-color: #FFCEF9;
        }

        .conteudo-tabela-principal {
            padding: .5%;
            text-align: center;
        }

        .botao-opcoes {
            display: flex;
            flex-direction: row;
            gap: 10%;
        }

        .botao-texto {
            background-color: #FF84F0;
            border-radius: 40px;
            padding: 0.25em 0.5em;

            display: flex;
            flex-direction: row;

            font-family: Inter;
            font-size: 15px;
            font-weight: 700;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <?php include '../Componentes/cabecalhoHomeAdm.php'; ?>
    <div class="conteudo-principal">
        <div style="display: flex;">
            <?php include '../Componentes/menuAdm.php'; ?>
        </div>
        <main>
            <div class="conteudo-acoes">
                <div class="cabecalho-pesquisa">
                    <form>
                        <div class="formulario-gerenciamento">
                            <button class="botao-enviar" type="submit">
                                <ion-icon size="small" name="search" style="color: #FF84F0;"></ion-icon>
                            </button>
                            <input class="botao-pesquisa config-gerenciamento" type="TEXT">
                        </div>
                    </form>
                </div>

                <div class="botao-opcoes">
                    <div class="botao-icone">
                        <a class="botao-texto">
                            <ion-icon name="add-outline"></ion-icon>
                            Cadastrar
                        </a>
                    </div>

                    <div class="botao-icone">
                        <a class="botao-texto">
                            <ion-icon name="brush-outline"></ion-icon>
                            Editar
                        </a>
                    </div>

                    <div class="botao-icone">
                        <a class="botao-texto">
                            <ion-icon name="trash-outline"></ion-icon>
                            Apagar
                        </a>
                    </div>
                </div>

            </div>
            <div class="conteudo-tabela">
                <table class="corpo-tabela">

                    <tr>
                        <th colspan="2" class="titulo-tabela">Mais Vendidos</th>
                    </tr>
                    <tr>
                        <td class="id-tabela">1</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>
                    <tr>
                        <td class="id-tabela">2</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>
                    <tr>
                        <td class="id-tabela">3</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>
                    <tr>
                        <td class="id-tabela">4</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>

                </table>
                <table class="corpo-tabela">

                    <tr>
                        <th colspan="2" class="titulo-tabela">Mais Vendidos</th>
                    </tr>
                    <tr>
                        <td class="id-tabela">1</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>
                    <tr>
                        <td class="id-tabela">2</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>
                    <tr>
                        <td class="id-tabela">3</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>
                    <tr>
                        <td class="id-tabela">4</td>
                        <td class="nome-produto-tabela">Pulseira pais e amo</td>
                    </tr>

                </table>
            </div>
            <table class="tabela-principal">
                <tr>
                    <th class="titulo-tabela-principal"><input type="checkbox" name="" id=""></th>
                    <th class="titulo-tabela-principal">ID</th>
                    <th class="titulo-tabela-principal">Nome</th>
                    <th class="titulo-tabela-principal">Marca</th>
                    <th class="titulo-tabela-principal">Categoria</th>
                    <th class="titulo-tabela-principal">Preço</th>
                    <th class="titulo-tabela-principal">Estoque</th>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">1</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class=conteudo-tabela-principal></td>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">2</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">3</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">4</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">5</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">6</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">7</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                </tr>
                <tr>
                    <td class="conteudo-tabela-principal"><input type="checkbox" name="" id=""></td>
                    <td class="conteudo-tabela-principal">8</td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                    <td class="conteudo-tabela-principal"></td>
                </tr>
            </table>
        </main>


    </div>
    <input type="text" value="2" id="pagina-verificacao" style="display:none;">

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>