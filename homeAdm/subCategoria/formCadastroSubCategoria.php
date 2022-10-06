<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro sub Categoria</title>

    <link href="../../css/reset.css" rel="stylesheet">
    <link href="../../css/estilo-home.css" rel="stylesheet">
    <link href="../../css/menuAdm.css" rel="stylesheet">

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

        .formulario-funcoes {
            width: 100%;

            display: flex;
            flex-direction: row;

            gap: 2rem;
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

        .label-texto {
            margin: 0 0 0 10px;

            font-size: 15px;
            font-family: 'Inter';
            font-weight: 600;
            color: #323232;
        }

        /* Select */

        .input-conjunto_categoria {
            width: 30%;
        }

        .formulario-conjunto {
            width: 100%;
        }

        .select-categoria {
            border: solid 1px #FF84F0;

            border-radius: 10px;

            width: 100%;
            height: 26px;

            padding-left: 35px;
        }

        /* Input Sub Categoria */

        .input-conjunto_subCategoria {
            width: 100%;

            display: flex;
            flex-direction: column;
        }

        .input-subCategoria {
            width: calc(100% - 35px);
            border: solid 1px #FF84F0;

            border-radius: 10px;
            height: 23px;

            outline: none;

            padding-left: 35px;
        }

        /* Botão Salvar */

        .input-salvar {
            width: 20%;
            margin-top: 15px;

            display: flex;
            justify-content: center;
            align-items: center;

            height: 30px;
        }

        .input-salvar input[type="submit"] {
            cursor: pointer;
            position: absolute;

            opacity: 0;

            width: 131px;
            height: 30px;

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
            height: 28px;

            background-color: #FF84F0;
            border: solid 2px #FF84F0;
            border-radius: 13px;

            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php
    include '../../conexao/conexao.php';
    $sql = "SELECT * FROM tb_categoria";
    $categorias = mysqli_query($conexao, $sql);
    ?>

    <?php
    include '../../Componentes/cabecalhoHomeAdm.php';
    ?>

    <div style="display: flex;">
        <?php include '../../Componentes/formMenuAdm.php'; ?>
    </div>

    <div class="conteudo-principal">
        <div class="main">
            <form action="cadastroGravaSubCategoria.php" method="POST">
                <div class="formulario-funcoes">
                    <div class="input-conjunto_categoria">
                        <label class="label-texto">Categoria:</label>
                        <div class="formulario-conjunto ">
                            <ion-icon class="botao-icone" name="pricetag-outline"></ion-icon>
                            <select class="select-categoria" name="idcategoria">
                                <?php
                                while ($resultado = mysqli_fetch_array($categorias)) {
                                ?>
                                    <option value="<?php echo $resultado['id_categoria']; ?>"><?php echo $resultado['nome_categoria']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="input-conjunto_subCategoria">
                        <label class="label-texto">Nome da subcategoria</label>
                        <div>
                            <ion-icon class="botao-icone" name="pricetag-outline"></ion-icon>
                            <input class="input-subCategoria" type="text" name="subcategoria">
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