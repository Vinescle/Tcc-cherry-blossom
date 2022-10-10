<?php
include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Política de privacidade</title>

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="./css/homeMarcas.css" rel="stylesheet">
</head>

<body>

    <?php
    session_start();

    if (isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHomeLogado.php';
    } else if (!isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHome.php';
    }
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="input-container">
                <input class="input-pesquisa" type="search">
            </div>

            <div class="marcas-container">
                <div class="bolas">
                </div>

                <div class="bolas">
                </div>

                <div class="bolas">
                </div>

                <div class="bolas">
                </div>

                <div class="bolas">
                </div>

                <div class="bolas">
                </div>

                <div class="bolas">
                </div> 
                
                <div class="bolas">
                </div> 

                <div class="bolas">
                </div>

                <div class="bolas">
                </div> 

                <div class="bolas">
                </div> 

                <div class="bolas">
                </div> 

                <div class="bolas">
                </div>

                <div class="bolas">
                </div>

                <div class="bolas">
                </div> 

                <div class="bolas">
                </div> 

                <div class="bolas">
                </div> 

                <div class="bolas">
                </div> 

                <div class="bolas">
                </div> 
                
                <div class="bolas">
                </div>

                <div class="bolas">
                </div> 
                
            </div>
            
        </div>
    </main>

    <?php
    include '../Componentes/rodapeHome.php';
    include '../Componentes/sugestaoProduto.php';
    ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>