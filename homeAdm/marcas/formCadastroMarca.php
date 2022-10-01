<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de marcas</title>

    <link href="../../css/reset.css" rel="stylesheet">
    <link href="../../css/estilo-home.css" rel="stylesheet">
    <link href="../../css/menuAdm.css" rel="stylesheet">
    <link href="../../css/marcas/marcas.css" rel="stylesheet">
</head>

<body>
    <?php
    include '../../Componentes/cabecalhoHomeAdm.php';
    ?>

    <div style="display: flex;">
        <?php include '../../Componentes/menuAdm.php'; ?>
    </div>

    <div class="conteudo-principal">
        <div class="main">
            <form action="cadastroGravaMarca.php" method="POST" enctype="multipart/form-data">
                <div class="input-marca">
                    <label class="label-texto">Nome da marca</label>
                    <div>
                        <ion-icon class="botao-icone" name="balloon-outline"></ion-icon>
                        <input class="input-campo" type="text" name="nomeMarca"><br><br>
                    </div>
                </div>

                <label class="label-texto">Ícone</label>
                <div class="input-conjunto_cor">
                    <div class="input-caixa_cor">
                        <div class="input-arquivo_botao">
                            <button class="botao-banner">
                                <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                <input type="file" name="iconUrl">
                            </button>
                        </div>

                        <div class="conjunto-escolherCor">
                            <!-- elemento do color picker com a cor padrão #ffffff -->
                            <hex-color-picker class="selecionador-cor" color="#ffff"></hex-color-picker>
                            <!-- inout para poder digitar a cor caso não quera escolher pelo color picker -->
                            <input class="botao-digitaCor" type="text" id="input-cor" onpaste="atualizarColorPicker()" />
                            <!-- botão que vc clica pra atualizar dps que digita a cor no campo acima, fiz isso pra ser mais fácil e evitar dor de cabeça -->
                            <button type="button" class="botao-atualizaCor" onclick="atualizarColorPicker()">Atualizar</button>
                        </div>
                    </div>

                    <div class="input-salvar">
                        <button class="botao-salvar">
                            <input type="submit" value="Salvar">
                            Salvar
                        </button>
                    </div>


                </div>
            </form>
        </div>
    </div>

    <!-- importa a bibloteca do color picker -->
    <script type="module" src="https://unpkg.com/vanilla-colorful?module"></script>
    <!-- script para pegar a cor e escrever no input e vice-versa -->
    <script>
        // procura o input onde ele vai exibir o hexa decimal
        const input = document.querySelector("#input-cor");
        // define a primeira cor a ser exibida
        input.value = "#ffffff";
        // pega o color picker
        const picker = document.querySelector("hex-color-picker");
        // checa por todas as vezes que ele atualizar
        picker.addEventListener("color-changed", (event) => {
            // pega a cor atual
            const newColor = event.detail.value;
            // coloca ela no input
            input.value = newColor;
        });

        // atualiza quando colar uma cor no campo ou clicar no botão "Atualizar"
        function atualizarColorPicker() {
            picker.color = input.value;
        }
    </script>

    <script src="./js/verificaIconPagina.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>