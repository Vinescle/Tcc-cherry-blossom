<?php
$page = 'marcas';
include '../../conexao.php';
include '../../verifica-logado.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-lateral.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/marcas/form-cadastro.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
    <style>
        .oculta {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    include('../../componentes/menu-cabecalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <form action="cadastroGravaMarca.php" method="POST" enctype="multipart/form-data">
                    <div class="input-container-form-produto">
                        <div class="w-100">
                            <label class="input-texto">Nome da marca</label>
                            <div class="input-container">
                                <button class="botao-input" disabled="">
                                    <ion-icon class="icone-input md hydrated" name="balloon-outline"></ion-icon>
                                </button>
                                <input class="input-conjunto input-tiktok" type="text" name="nomeMarca" required>
                            </div>

                            <label class="input-texto">Ícone</label>
                            <div class="input-conjunto_cor">
                                <div class="input-caixa_cor">
                                    <div class="input-arquivo_botao">
                                        <button class="botao-banner" id="botao-banner">
                                            <img id="output" style="width:200px;">
                                            <ion-icon class="input-icone_botao" name="add-outline"></ion-icon>
                                            <input type="file" name="iconUrl" class="iconImg" onchange="previewImagem(event)" required>
                                        </button>
                                    </div>

                                    <div class="conjunto-escolherCor">
                                        <!-- elemento do color picker com a cor padrão #ffffff -->
                                        <hex-color-picker class="selecionador-cor" name="corMarca" color="#ffff"></hex-color-picker>
                                        <!-- inout para poder digitar a cor caso não quera escolher pelo color picker -->
                                        <input class="botao-digitaCor" type="text" id="input-cor" name="corMarca" onpaste="atualizarColorPicker()" />
                                        <!-- botão que vc clica pra atualizar dps que digita a cor no campo acima, fiz isso pra ser mais fácil e evitar dor de cabeça -->
                                        <button type="button" class="botao-texto" name="corMarca" onclick="atualizarColorPicker()">Atualizar</button>
                                    </div>
                                </div>

                                <div class="input-salvar">
                                    <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                </form>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/vanilla-colorful?module"></script>
        <script>
            // procura o input onde ele vai exibir o hexa decimal
            const input = document.querySelector("#input-cor");
            const botaoBanner = document.querySelector("#botao-banner");
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
                botaoBanner.style.background = newColor;
            });

            // atualiza quando colar uma cor no campo ou clicar no botão "Atualizar"
            function atualizarColorPicker() {
                picker.color = input.value;
                botaoBanner.style.background = input.value;
            }
        </script>
        <script>
            const input_icone_botao = document.querySelector('.input-icone_botao');

            var previewImagem = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src)
                }
            };
            const iconImg = document.querySelector('.iconImg');
            iconImg.addEventListener('change', function(e) {
                input_icone_botao.classList.add('oculta');
            })
        </script>
        <?php
        include('../../imports.php');
        ?>

        <script>
            $('#input-cor').mask('SAAAAAA', {
                'translation': {
                    S: {
                        pattern: /[#]/
                    },
                    A: {
                        pattern: /[A-Fa-f0-9]/
                    }
                }
            });
        </script>
</body>

</html>