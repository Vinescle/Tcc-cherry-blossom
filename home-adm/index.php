<?php
$page = 'home';
include '../conexao.php';
include '../verifica-logado.php';
$sqlVisitasTotal = "SELECT COUNT(*) FROM tb_log_visitas";
$resultadoVisitasTotal = mysqli_query($conexao, $sqlVisitasTotal);
$resultadoVisitasTotal = mysqli_fetch_array($resultadoVisitasTotal);

// Descobrindo o maior mês
$sqlMaiorMês = "SELECT MAX(DATE_FORMAT(data_visita,'%m'))
FROM tb_log_visitas WHERE (SELECT MAX(DATE_FORMAT(data_visita,'%m')) FROM tb_log_visitas) = 
(SELECT MAX(DATE_FORMAT(data_visita,'%m')) FROM tb_log_visitas)";
$resultadoMesMais = mysqli_query($conexao,$sqlMaiorMês);
$resultadoMesMais = mysqli_fetch_array($resultadoMesMais);
$maiorMes = $resultadoMesMais[0];

if($maiorMes >= 7){
    
}else{

}

?>
<input type="text" id="maiorMes" style="display: none;" value="<?php echo $maiorMes ?>">
<?php

// SQLs de porcentagem

$sqlPorcentagem = "SELECT COUNT(*)*100 as valor_mes_atual
FROM tb_log_visitas WHERE (SELECT MAX(DATE_FORMAT(data_visita,'%m')) FROM tb_log_visitas) = 
(SELECT MAX(DATE_FORMAT(data_visita,'%m')) FROM tb_log_visitas)";
$resultadoPorcentagemUm = mysqli_query($conexao, $sqlPorcentagem);
$resultadoPorcentagemUm = mysqli_fetch_array($resultadoPorcentagemUm);
$sqlPorcentagem = "SELECT 
CASE WHEN count(*) = 0 THEN 1 END as valor_mes_anterior
FROM tb_log_visitas WHERE DATE_FORMAT(data_visita,'%m') = (SELECT MAX(DATE_FORMAT(data_visita,'%m')) - 1 FROM tb_log_visitas);";
$resultadoPorcentagemDois = mysqli_query($conexao, $sqlPorcentagem);
$resultadoPorcentagemDois = mysqli_fetch_array($resultadoPorcentagemDois);
$porcentagemVisita = $resultadoPorcentagemUm[0] / $resultadoPorcentagemDois[0];



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
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/index.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabeçalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../componentes/menu-lateral-adm.php');
        ?>

        <div class="conteudo-principal">
            <div class="dados">
                <div class="dados-tabelas">
                    <div class="tabela">
                        <h3 class="tabela-numero"><?php echo $resultadoVisitasTotal[0] ?></h3>
                        <p class="tabela-titulo">Visitas</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem"><?php echo $porcentagemVisita ?>%</p>
                        </div>
                    </div>

                    <div class="tabela">
                        <h3 class="tabela-numero">X.XXX</h3>
                        <p class="tabela-titulo">Vendas</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem">XXX</p>
                        </div>
                    </div>

                    <div class="tabela">
                        <h3 class="tabela-numero">R$X.XXX</h3>
                        <p class="tabela-titulo">Lucros</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem">XXX</p>
                        </div>
                    </div>

                    <div class="tabela">
                        <h3 class="tabela-numero">XXX</h3>
                        <p class="tabela-titulo">Inscritos</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem">XXX</p>
                        </div>
                    </div>
                </div>

                <div class="dados-graficos">
                    <div class="grafico">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const mes = document.querySelector('#maiorMes');
                            console.log(mes.defaultValue);
                            if(mes.defaultValue >= 7){
                                var labels = [
                                    'julho', 
                                    'agosto', 
                                    'setembro', 
                                    'outubro', 
                                    'novembro',
                                    'dezembro',
                            ];
                            }else{
                                var labels = [
                                'Janeiro',
                                'Fevereiro',
                                'Março',
                                'Abril',
                                'Maio',
                                'Junho',
                            ];
                             
                            }
                            console.log(labels); 

                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'Visitas nos últimos 6 meses',
                                    backgroundColor: 'rgb(255, 99, 132)',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [20, 10, 5, 2, 80, 30, 45],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                    ],
                                    borderWidth: 1
                                }]

                            };

                            const config = {
                                type: 'bar',
                                data: data,
                                options: {}
                            };
                        </script>

                        </script>
                        <script>
                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                        </script>

                    </div>

                    <div class="grafico">
                        <div>
                            <canvas id="WeChart"></canvas>
                        </div>
                        <script>
                            const labelse = [
                                'January',
                                'February',
                                'March',
                                'April',
                                'May',
                                'June',
                            ];

                            const dataBundinha = {
                                labels: labels,
                                datasets: [{
                                    label: 'Vendas nos últimos 6 meses',
                                    backgroundColor: 'rgb(255, 99, 132)',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [20, 10, 5, 2, 80, 30, 45],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                    ],
                                    borderWidth: 1
                                }]

                            };
                            const configDois = {
                                type: 'bar',
                                data: dataBundinha,
                                options: {}
                            };
                        </script>

                        </script>
                        <script>
                            const WeChart = new Chart(
                                document.getElementById('WeChart'),
                                configDois
                            );
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../imports.php');
    ?>
</body>

</html>