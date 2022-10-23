<?php

/* DADOS DO PRODUTO A SER ENVIADO */
$peso          = 2;
$valor         = 100;
$tipo_do_frete = '41106'; //Sedex: 40010   |  Pac: 41106
$altura        = 40;
$largura       = 30;
$comprimento   = 30;


$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
$url .= "nCdEmpresa=";
$url .= "&sDsSenha=";
$url .= "&sCepOrigem=" . $cep_origem;
$url .= "&sCepDestino=" . $cep_destino;
$url .= "&nVlPeso=" . $peso;
$url .= "&nVlLargura=" . $largura;
$url .= "&nVlAltura=" . $altura;
$url .= "&nCdFormato=1";
$url .= "&nVlComprimento=" . $comprimento;
$url .= "&sCdMaoProria=n";
$url .= "&nVlValorDeclarado=" . $valor;
$url .= "&sCdAvisoRecebimento=n";
$url .= "&nCdServico=" . $tipo_do_frete;
$url .= "&nVlDiametro=0";
$url .= "&StrRetorno=xml";

$xml = simplexml_load_file($url);

$frete =  $xml->cServico;

$valorFrete = "" . $frete->Valor . "";
$_SESSION['pac'] = $valorFrete;


$prazoPac = "PAC - Prazo de " . $frete->PrazoEntrega . " dias";
$_SESSION['prazo_pac'] = $prazoPac;

$_SESSION['frete'] = "<p>PAC: R$ " . $frete->Valor . "<br />Prazo: " . $frete->PrazoEntrega . " dias</p>";


$peso          = 2;
$valor         = 100;
$tipo_do_frete = '40010'; //Sedex: 40010   |  Pac: 41106
$altura        = 40;
$largura       = 30;
$comprimento   = 30;


$urlSedex = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
$urlSedex .= "nCdEmpresa=";
$urlSedex .= "&sDsSenha=";
$urlSedex .= "&sCepOrigem=" . $cep_origem;
$urlSedex .= "&sCepDestino=" . $cep_destino;
$urlSedex .= "&nVlPeso=" . $peso;
$urlSedex .= "&nVlLargura=" . $largura;
$urlSedex .= "&nVlAltura=" . $altura;
$urlSedex .= "&nCdFormato=1";
$urlSedex .= "&nVlComprimento=" . $comprimento;
$urlSedex .= "&sCdMaoProria=n";
$urlSedex .= "&nVlValorDeclarado=" . $valor;
$urlSedex .= "&sCdAvisoRecebimento=n";
$urlSedex .= "&nCdServico=" . $tipo_do_frete;
$urlSedex .= "&nVlDiametro=0";
$urlSedex .= "&StrRetorno=xml";


$xml = simplexml_load_file($urlSedex);

$frete =  $xml->cServico;

$valorFrete = "" . $frete->Valor . "";
$_SESSION['sedex'] = $valorFrete;


$prazoPac = "SEDEX - Prazo de " . $frete->PrazoEntrega . " dias";

$_SESSION['prazo_sedex'] = $prazoPac;

$_SESSION['frete'] = $_SESSION['frete'] . "<p>SEDEX: R$ " . $frete->Valor . "<br />Prazo: " . $frete->PrazoEntrega . " dias</p>";
