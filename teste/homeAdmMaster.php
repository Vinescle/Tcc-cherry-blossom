<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home--ADM</title>

    <style>
        .hidden{
            display: none;
        }
    </style>
</head>

<body>
    <div class="cabecalho">
        <?php include '../Componentes/cabecalhoHomeAdm.php';?>
    </div>
    <div>
        <?php include './Componentes/menuAdm.php';?>
    </div>
    <main class="Gerenciador-de-conteudo">
        <div id="homeAdm"><?php include 'homeAdm.php'; ?></div>
        <div id="homeAdmCategoria" class="hidden"><?php include 'homeAdmCategoria.php'; ?></div>
        <div id="homeAdmConfig" class="hidden"><?php include 'homeAdmConfig.php'; ?></div>
        <div id="homeAdmGerencia" class="hidden"><?php include 'homeAdmGerencia.php'; ?></div>
        <div id="homeAdmMarca" class="hidden"><?php include 'homeAdmMarca.php'; ?></div>
    </main>

    <script src="./js/homeMaster.js"></script>
</body>

</html>