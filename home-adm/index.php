<?php
$page = 'home';
include '../conexao.php';
include '../verifica-logado.php';
$sqlVisitasTotal = "SELECT COUNT(*) FROM tb_log_visitas 
WHERE DATE_FORMAT(data_visita,'%d') = (SELECT MAX(DATE_FORMAT(data_visita,'%d')) FROM tb_log_visitas)
AND DATE_FORMAT(data_visita,'%m') = (SELECT MAX(DATE_FORMAT(data_visita,'%m')) FROM tb_log_visitas)";
$resultadoVisitasTotal = mysqli_query($conexao, $sqlVisitasTotal);
$resultadoVisitasTotal = mysqli_fetch_array($resultadoVisitasTotal);

// Descobrindo o maior mês
$sqlMaiorMês = "SELECT MAX(DATE_FORMAT(data_visita,'%m'))
FROM tb_log_visitas WHERE (SELECT MAX(DATE_FORMAT(data_visita,'%m')) FROM tb_log_visitas) = 
(SELECT MAX(DATE_FORMAT(data_visita,'%m')) FROM tb_log_visitas)";
$resultadoMesMais = mysqli_query($conexao,$sqlMaiorMês);
$resultadoMesMais = mysqli_fetch_array($resultadoMesMais);
$maiorMes = $resultadoMesMais[0];
// ARRAY DE ULTIMOS MESES
$sqlUltimosMeses = "SELECT a.nome_mes,a.numero_mes, 
CASE WHEN COUNT(a.nome_mes) = 1 THEN 0 ELSE COUNT(a.nome_mes) END 
FROM tb_meses a 
LEFT JOIN tb_log_visitas b ON a.id_mes = b.fk_id_mes
WHERE numero_mes <= 10 AND numero_mes >= 10-5 group BY nome_mes ORDER BY a.numero_mes";
$resultadoUltimosMeses = mysqli_query($conexao,$sqlUltimosMeses);
$resultadoUltimosMeses = mysqli_fetch_all($resultadoUltimosMeses);
// VISITAS SEMANAIS
$sqlDiaMAX = "SELECT MAX(date_format(data_visita, '%d')) AS dia FROM tb_log_visitas";
$resultadoDiaMAX = mysqli_query($conexao, $sqlDiaMAX);
$resultadoDiaMAX = mysqli_fetch_array($resultadoDiaMAX);
$DiaMAX = $resultadoDiaMAX['dia'];
$sqlVisitaSemanal = "SELECT COUNT(*) AS visitaSemanal, date_format(data_visita, '%d') as dia FROM tb_log_visitas
WHERE date_format(data_visita, '%d') <= $DiaMAX 
AND date_format(data_visita, '%d') >= $DiaMAX-6";
$resultadoVisitaSemanal = mysqli_query($conexao,$sqlVisitaSemanal);
$resultadoVisitaSemanal = mysqli_fetch_array($resultadoVisitaSemanal);
//INSCRITOS SEMANAIS
$sqlDiaMAX = "SELECT MAX(date_format(data_cadastro, '%d')) AS dia FROM tb_email_para_notificar";
$resultadoDiaMAX = mysqli_query($conexao, $sqlDiaMAX);
$resultadoDiaMAX = mysqli_fetch_array($resultadoDiaMAX);
$DiaMAX = $resultadoDiaMAX['dia'] ?? 0;
$sqlInscritosSemanal = "SELECT COUNT(*) AS inscritosSemanal, date_format(data_cadastro, '%d') as dia FROM tb_email_para_notificar
WHERE date_format(data_cadastro, '%d') <= $DiaMAX 
AND date_format(data_cadastro, '%d') >= $DiaMAX-6";
$resultadoInscritosSemanal = mysqli_query($conexao,$sqlInscritosSemanal);
$resultadoInscritosSemanal = mysqli_fetch_array($resultadoInscritosSemanal);

// SQL EMAIL DASHBOARD
$sql = "SELECT COUNT(*) FROM tb_email_para_notificar 
WHERE fk_id_mes = (SELECT MAX(DATE_FORMAT(data_cadastro,'%m')) FROM tb_email_para_notificar)";
$resultadoEmail = mysqli_query($conexao,$sql);
$resultadoEmail = mysqli_fetch_array($resultadoEmail);
$quantidadeEmail = $resultadoEmail[0];
$PorcentagemEmail = $resultadoEmail[0]*100;
$sqlEmailMesAnterior = "SELECT CASE WHEN count(*) = 0 THEN 1 END as valor_mes_anterior
FROM tb_email_para_notificar WHERE DATE_FORMAT(data_cadastro,'%m') = (SELECT MAX(DATE_FORMAT(data_cadastro,'%m')) - 1 FROM tb_email_para_notificar);";
$resultadoEmail = mysqli_query($conexao,$sqlEmailMesAnterior);
$resultadoEmail = mysqli_fetch_array($resultadoEmail);
$PorcentagemEmail = $PorcentagemEmail / $resultadoEmail['valor_mes_anterior'];
//Vendas por dia
$sqlVendasDia = "SELECT COUNT(*) AS vendasDia FROM tb_produto_pedido a 
INNER JOIN tb_produtos b ON b.id_produtos = a.id_produto
INNER JOIN tb_usuario_pedido c ON c.id_usuario = a.id_usuario WHERE DATE_FORMAT(c.data_pedido, '%d') = (SELECT MAX(DATE_FORMAT(c.data_pedido, '%d')) FROM tb_usuario_pedido)";
$resultadoVendasDia = mysqli_query($conexao,$sqlVendasDia);
$resultadoVendasDia = mysqli_fetch_array($resultadoVendasDia);
//Venda na semana
// FAZER AMANHÃ
//Vendas por mês
$sqlVendasMes = "SELECT a.nome_mes,a.numero_mes, 
CASE WHEN COUNT(b.id_usuario) = 1 THEN 1 ELSE COUNT(b.id_usuario) END 
FROM tb_meses a 
LEFT JOIN tb_usuario_pedido b ON a.id_mes = (SELECT MAX(DATE_FORMAT(data_pedido,'%m')) FROM tb_usuario_pedido)
WHERE numero_mes <= 10 AND numero_mes >= 10-5 GROUP BY id_mes";
$resultadoVendasMes = mysqli_query($conexao,$sqlVendasMes);
$resultadoVendasMes = mysqli_fetch_all($resultadoVendasMes);
// var_dump($resultadoVendasMes);
// var_dump($resultadoVendasMes[0][2]);
// exit();


?>
<input type="text" id="maiorMes" style="display: none;" value="<?php echo $maiorMes ?>">


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
    include('../componentes/menu-cabecalho.php');
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
                            <p class="tabela-porcentagem"><?php  echo $resultadoVisitaSemanal['visitaSemanal']?></p>
                        </div>
                    </div>

                    <div class="tabela">
                        <h3 class="tabela-numero"><?php echo $resultadoVendasDia['vendasDia']?></h3>
                        <p class="tabela-titulo">Vendas</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem"><?php echo $resultadoVendasDia['vendasDia']?></p>
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
                        <h3 class="tabela-numero"><?php echo isset($quantidadeEmail) ? $quantidadeEmail : '0'  ?></h3>
                        <p class="tabela-titulo">Inscritos</p>
                        <div class="tabela-conjunto_porcentagem">
                            <ion-icon class="tabela-icone_porcentagem" name="caret-up-outline"></ion-icon>
                            <p class="tabela-porcentagem"><?php echo isset($resultadoInscritosSemanal['inscritosSemanal']) ? $resultadoInscritosSemanal['inscritosSemanal'] : '0' ?></p>
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
                            var UltimosMeses = <?php echo json_encode($resultadoUltimosMeses); ?>;
                            console.log(UltimosMeses);
                            const mes = document.querySelector('#maiorMes');
                            console.log(mes.defaultValue);
                                var labels = [
                                    UltimosMeses[0][0], 
                                    UltimosMeses[1][0], 
                                    UltimosMeses[2][0], 
                                    UltimosMeses[3][0], 
                                    UltimosMeses[4][0],
                                    UltimosMeses[5][0],
                            ];
                            console.log(labels); 

                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'Visitas nos últimos 6 meses',
                                    backgroundColor: 'rgb(255, 99, 132)',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [UltimosMeses[0][2], UltimosMeses[1][2], UltimosMeses[2][2], UltimosMeses[3][2], UltimosMeses[4][2], UltimosMeses[5][2]],
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
                            var UltimosMesesVendas = <?php echo json_encode($resultadoVendasMes); ?>;
                            const labelse = [
                                UltimosMesesVendas[0][1], 
                                UltimosMesesVendas[1][1], 
                                UltimosMesesVendas[2][1], 
                                UltimosMesesVendas[3][1], 
                                UltimosMesesVendas[4][1],
                                UltimosMesesVendas[5][1],
                            ];

                            const dataBundinha = {
                                labels: labels,
                                datasets: [{
                                    label: 'Vendas nos últimos 6 meses',
                                    backgroundColor: 'rgb(255, 99, 132)',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [UltimosMesesVendas[0][2], UltimosMesesVendas[1][2], UltimosMesesVendas[2][2], UltimosMesesVendas[3][2], UltimosMesesVendas[4][2], UltimosMesesVendas[5][2]],
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