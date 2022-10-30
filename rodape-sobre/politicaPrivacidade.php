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

    <link href="<?php echo $rota; ?>/assets/css/rodape-sobre/politicaPrivacidade.css" rel="stylesheet">

    <title>Cherry Blossom - Home</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabecalho.php');
    ?>
    
    <main>
        <div class="conteudo-principal">
            <div class="div-titulo">
                <h1 class="titulo-pagina">POLÍTICA DE PRIVACIDADE</h1>
            </div>

            <div class="conteudo-texto">
                <p class="texto">A sua privacidade é importante para nós. É política do Cherry Blossom respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Cherry Blossom, e outros sites que possuímos e operamos.</p>

                <p class="texto">Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.</p>

                <p class="texto">Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p>

                <p class="texto">Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei</p>

                <p class="texto">O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas políticas de privacidade.</p>

                <p class="texto">Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>

                <p class="texto">O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p>
            </div>

            <div class="conteudo-compromisso">
                <h3 class="subtitulo-pagina">Compromisso do Usuário</h3>

                <p class="texto">O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Cherry Blossom oferece no site e com caráter enunciativo, mas não limitativo:</p>

                <ul>
                    <li class="texto">A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li>
                    <li class="texto">B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, betano ou azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>
                    <li class="texto">C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Cherry Blossom, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
                </ul>
            </div>

            <div class="conteudo-maisInfo">
                <h3 class="subtitulo-pagina">Mais Informações</h3>

                <p class="texto">Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p>
            </div>

            <div>
                <h4 class="subtitulo-pagina">Esta política é efetiva a partir de 2 outubro 2022 20:57</h4>
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