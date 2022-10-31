<?php

// session_start();
include '../../conexao.php';

$cepOrigem = 88701643;
$cepDestino = 0;

$peso          = 0;
$valor         = 0;
$tipoFrete     = [];
$tipoFrete['sedex'] = '40010';
$tipoFrete['pac'] = '41106';
$altura        = 0;
$largura       = 0;
$comprimento   = 0;

if (!empty($_GET['cep'])) {
    calculaProduto();
} else if (!empty($_GET['carrinho'])) {
    global $peso;
    global $valor;
    global $altura;
    global $largura;
    global $comprimento;
    global $cepDestino;

    $sqlEndereco = "SELECT * FROM tb_endereco where fk_id_usuario = $_SESSION[id_usuario] LIMIT 1";
    $resultado = mysqli_query($conexao, $sqlEndereco);
    $resultadoInfoEndereco = mysqli_fetch_array($resultado);

    $cepDestino = $resultadoInfoEndereco['cep'];

    foreach ($_SESSION['carrinho'] as $key => $produto) {
        $sqlProduto = "SELECT * FROM tb_produtos WHERE id_produtos = $produto[produto]";
        $queryProduto = mysqli_query($conexao, $sqlProduto);

        while ($produtoBanco = mysqli_fetch_array($queryProduto)) {
            $peso += $produtoBanco['peso_produto'] * $produto['quantidade'];
            $valor += $produtoBanco['preco_produto'] * $produto['quantidade'];
            $altura < $produtoBanco['altura_produto'] ? $altura = $produtoBanco['altura_produto'] : $altura = $altura;
            $largura += $produtoBanco['largura_produto'] * ($produto['quantidade'] == 1 ? $produto['quantidade'] : $produto['quantidade'] * .5);
            $comprimento += $produtoBanco['profundidade_produto'] * ($produto['quantidade'] == 1 ? $produto['quantidade'] : $produto['quantidade'] * .5);
        }
    }
    calculaFrete();
}

function calculaProduto()
{
    global $peso;
    global $valor;
    global $altura;
    global $largura;
    global $comprimento;
    global $cepDestino;

    $peso          = $_GET['peso'];
    $valor         = $_GET['valor'];
    $altura        = $_GET['altura'];
    $largura       = $_GET['largura'];
    $comprimento   = $_GET['comprimento'];
    $cepDestino    = $_GET['cep'];

    calculaFrete();
}

function calculaFrete($show = true)
{
    global $peso;
    global $valor;
    global $tipoFrete;
    global $altura;
    global $largura;
    global $comprimento;
    global $cepDestino;
    global $cepOrigem;

    $freteOpcoes = [];

    foreach ($tipoFrete as $key => $frete) {
        $urlSedex = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
        $urlSedex .= "nCdEmpresa=";
        $urlSedex .= "&sDsSenha=";
        $urlSedex .= "&sCepOrigem=" . $cepOrigem;
        $urlSedex .= "&sCepDestino=" . $cepDestino;
        $urlSedex .= "&nVlPeso=" . (int)$peso / 1000;
        $urlSedex .= "&nVlLargura=" . (int)$largura;
        $urlSedex .= "&nVlAltura=" . (int)$altura;
        $urlSedex .= "&nCdFormato=1";
        $urlSedex .= "&nVlComprimento=" . (int)$comprimento;
        $urlSedex .= "&sCdMaoProria=n";
        $urlSedex .= "&nVlValorDeclarado=" . (int)$valor;
        $urlSedex .= "&sCdAvisoRecebimento=n";
        $urlSedex .= "&nCdServico=" . $tipoFrete[$key];
        $urlSedex .= "&nVlDiametro=0";
        $urlSedex .= "&StrRetorno=xml";

        $xml = simplexml_load_file($urlSedex);

        $frete =  $xml->cServico;

        $freteOpcoes[] = $frete;

        $_SESSION['fretes'][$key] = array(
            'valor' => (string)$frete->Valor,
            'codigo' => (string)$frete->Codigo,
            'prazoEntrega' => (int)$frete->PrazoEntrega,
        );
    }
    if ($show)
        echo json_encode($freteOpcoes);

    return json_encode($freteOpcoes);
}
