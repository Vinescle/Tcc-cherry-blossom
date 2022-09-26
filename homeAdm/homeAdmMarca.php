<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry Blossom - Adm</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/menuAdm.css" rel="stylesheet">
    <link href="../css/homeAdm/homeAdmMarca.css" rel="stylesheet">

    <style>
        .icone-selecionado {
            background-color: #EC55D9;
            color: #FFFFFF;
        }

        .conteudo-principal {
            display: flex;
            flex-wrap: wrap;

            width: calc(100% - 107px);
            margin-left: 107px;
        }

        .main {
            display: flex;
            flex-direction: row;
            gap: 50px;

            width: 100%;
            padding: 0 40px;
        }

        .conteudo-acoes {
            margin-top: 2rem;
        }

        /* Bolas */

        .marcas {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 29px;

            width: 100%;
            margin-top: 2rem;
            padding: 0 40px;
        }

        .marca-circulo {
            display: flex;
            align-items: center;

            border-radius: 1000px;
            width: 100px;
            height: 100px;
            background: #A5FF7B;
            overflow: hidden;
        }

        .marca-imagem {
            width: 110%;
            height: auto;
            transform: translate(-5px, 5px);
        }
    </style>
</head>

<body>
    <?php
        include '../Componentes/cabecalhoHomeAdm.php';

    //Back-end
        include '../conexao/conexao.php';
        $sql = "SELECT * FROM tb_marcas";
        $resultado = mysqli_query($conexao,$sql);
    ?>

    <div style="display: flex;">
        <?php include '../Componentes/menuAdm.php'; ?>
    </div>

    <div class="conteudo-principal">
        <div class="main">
            <div class="conteudo-acoes">
                <div class="grupo-filtro">
                    <div class="cabecalho-pesquisa">
                        <form>
                            <div class="formulario-gerenciamento">
                                <button class="botao-enviar" type="submit">
                                </button>
                                <input class="botao-pesquisa_produtos config-gerenciamento" type="TEXT">
                            </div>
                        </form>
                    </div>

                    <div class="espacamento-botoes">
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
                </div>

                <div class="botoes-setas">
                    <a>
                        <ion-icon class="setas" name="chevron-back-outline"></ion-icon>
                    </a>
                    <a>
                        <ion-icon class="setas" name="chevron-forward-outline"></ion-icon>
                    </a>
                </div>
            </div>

        </div>

        <div class="marcas">
                <?php
                    while($resultadoBolas = mysqli_fetch_array($resultado)){
                        ?>
                        <div class="marca-bolas">
                            <div class="marca-circulo" style="background-color:<?php echo $resultadoBolas['icon_url'];?>;">
                                <img src="../imagemBancoDeDados/marcas/<?php echo $resultadoBolas['cor_marca']?>" class="marca-imagem" value="<?php ?>">
                            </div>
                        </div>
                    <?php
                    }
                ?>
        </div>
    </div>
    <input type="text" value="4" id="pagina-verificacao" style="display:none;">

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>