<?php
include '../conexao.php';

require_once('../vendor/stripe-php/init.php');
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LnXU3DUGTCz2iFTXzfgE7pRUHyxZBSQP5h3tgS8vtYrgipEwGJcFqnzapjsXD58sf2lREIU2zBhHpXXOnYvd8j500a35McRy7');

header('Content-Type: application/json');

$YOUR_DOMAIN = $rota;

$carrinhoProdutos = $_SESSION['carrinho'];

$data = date('Y-m-d H:i:s');

// $frete_price = floatval(str_replace(",", ".", $_POST['frete_price']));
// $frete_deadline = $_POST['frete_deadline'];
// $frete_name = $_POST['frete_name'];
$sqlProdutos = [];
$precoTotal = 0;
$produtos = [];
foreach ($carrinhoProdutos as $key => $produto) {
    $sqlProduto = "SELECT * FROM tb_produtos WHERE id_produtos = $produto[produto]";
    $queryProduto = mysqli_query($conexao, $sqlProduto);

    $sqlImagens = "SELECT * FROM tb_imagem_produtos WHERE fk_id_produto = $produto[produto] LIMIT 1";
    $queryImagem = mysqli_query($conexao, $sqlImagens);

    $productImage = '';
    while ($row = mysqli_fetch_array($queryImagem)) {
        $productImage = $row['url'];
    }

    while ($row = mysqli_fetch_array($queryProduto)) {
        $precoTotal += $row['preco_produto'] * $produto['quantidade'];
        $produtos[] = [
            'price_data' => [
                'currency' => 'brl',
                'unit_amount' => $row['preco_produto'] * 100,
                'product_data' => [
                    'name' => $row['nome_produto'],
                    // 'description' => html_entity_decode(strip_tags($row['description'])),
                    'images' => ['http://localhost/assets/img/Product%20Img/' . $productImage],
                ],
            ],
            'quantity' => $produto['quantidade'],
        ];

        $sqlProdutos[] = "INSERT INTO tb_produto_pedido (id_usuario,id_produto,quantidade,fk_id_pedido) VALUES ('$_SESSION[id_usuario]','$produto[produto]',' $produto[quantidade]',";
    }
}
$sql = "INSERT INTO tb_usuario_pedido (id_usuario,preco_total,frete,data_pedido) VALUES ('$_SESSION[id_usuario]','$precoTotal','123456789','$data')";
$query = mysqli_query($conexao, $sql);
$idPedido = mysqli_insert_id($conexao);

foreach ($sqlProdutos as $sqlProduto) {
    $query = mysqli_query($conexao, $sqlProduto . "'" . $idPedido . "')");
}


// $checkout_session = \Stripe\Checkout\Session::create([
//     'payment_method_types' => ['card', 'boleto'],
//     'line_items' => $products,
//     'shipping_options' => [
//         [
//             'shipping_rate_data' => [
//                 'type' => 'fixed_amount',
//                 'fixed_amount' => [
//                     'amount' => $frete_price * 100,
//                     'currency' => 'brl',
//                 ],
//                 'display_name' => $frete_deadline,
//             ]
//         ],
//     ],
//     'mode' => 'payment',
//     'success_url' => $YOUR_DOMAIN . "/confirmOrder.php?order=$lastid&complete=true&session_id={CHECKOUT_SESSION_ID}",
//     'cancel_url' => $YOUR_DOMAIN . "/confirmOrder.php?order=$lastid&complete=false",
// ]);

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card', 'boleto'],
    'line_items' => $produtos,
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . "/confirmOrder.php?session_id={CHECKOUT_SESSION_ID}",
    'cancel_url' => $YOUR_DOMAIN . "/confirmOrder.php?session_id={CHECKOUT_SESSION_ID}",
]);

header("Location: " . $checkout_session->url);
