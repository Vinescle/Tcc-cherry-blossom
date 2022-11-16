<?php
include '../conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/rodape.css" rel="stylesheet">

    <link href="<?php echo $rota; ?>/assets/css/rodape-sobre/termos.css" rel="stylesheet">

    <title>Cherry Blossom</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabecalho.php');
    ?>

    <main>
        <div class="conteudo-principal">
            <div class="div-titulo">
                <h1 class="titulo-pagina">TERMOS DE USO E NAVEGAÇÃO</h1>
            </div>

            <div class="div-termos">
                <h4 class="subtitulo">1. Termos</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Ao acessar ao site Cherry Blossom, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis</p>
            </div>

            <div class="div-usoLi">
                <h4 class="subtitulo">2. Uso de Licença</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site Cherry Blossom , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode:</p>

                <ol>
                    <li style="display: list-item !important;" class="texto">Modificar ou copiar os materiais;</li>
                    <li style="display: list-item !important;" class="texto">Usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial);</li>
                    <li style="display: list-item !important;" class="texto">Tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Cherry Blossom;</li>
                    <li style="display: list-item !important;" class="texto">Remover quaisquer direitos autorais ou outras notações de propriedade dos materiais;</li>
                    <li style="display: list-item !important;" class="texto">Transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li>
                </ol>
            </div>

            <div class="div-isencao">
                <h4 class="subtitulo">3. Isenção de Responsabilidade</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Os materiais no site da Cherry Blossom são fornecidos 'como estão'. Cherry Blossom não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos.</p>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Além disso, o Cherry Blossom não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</p>
            </div>

            <div class="div-limitacoes">
                <h4 class="subtitulo">4. Limitações</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Em nenhum caso o Cherry Blossom ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em Cherry Blossom, mesmo que Cherry Blossom ou um representante autorizado da Cherry Blossom tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
            </div>

            <div class="div-materiais">
                <h4 class="subtitulo">5. Precisão dos Materiais</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Os materiais exibidos no site da Cherry Blossom podem incluir erros técnicos, tipográficos ou fotográficos. Cherry Blossom não garante que qualquer material em seu site seja preciso, completo ou atual. Cherry Blossom pode fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, Cherry Blossom não se compromete a atualizar os materiais.</p>
            </div>

            <div class="div-links">
                <h4 class="subtitulo">6. Links</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;O Cherry Blossom não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Cherry Blossom do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>
            </div>

            <div class="div-modificacoes">
                <h4 class="subtitulo">Modificações</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;O Cherry Blossom pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
            </div>

            <div class="div-leiAplicavel">
                <h4 class="subtitulo">Lei Aplicável</h4>

                <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;Estes termos e condições são regidos e interpretados de acordo com as leis do Cherry Blossom e você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
            </div>
        </div>
    </main>

    <?php
    include('../componentes/rodape.php');
    ?>

    <?php
    include('../imports.php');
    ?>
</body>

</html>