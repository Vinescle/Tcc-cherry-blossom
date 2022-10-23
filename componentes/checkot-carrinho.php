<?php
include '../conexao.php';

require_once('../vendor/stripe-php/init.php');
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LnXU3DUGTCz2iFTXzfgE7pRUHyxZBSQP5h3tgS8vtYrgipEwGJcFqnzapjsXD58sf2lREIU2zBhHpXXOnYvd8j500a35McRy7');

header('Content-Type: application/json');

$YOUR_DOMAIN = $rota;

$carrinhoProdutos = $_SESSION['carrinho'];

// $id_product = $_POST['id_product'];
// $quantity_product = $_POST['quantity_product'];
// $total_price = $_POST['total_price'];
// $id_user = $_POST['id_user'];
// $frete = $_POST['frete'];
$date = date('Y-m-d H:i:s');

// $frete_price = floatval(str_replace(",", ".", $_POST['frete_price']));
// $frete_deadline = $_POST['frete_deadline'];
// $frete_name = $_POST['frete_name'];

// $sql = "INSERT INTO user_order (user_id,total_price,frete,order_date) VALUES ('$id_user','$total_price','$frete','$date')";
// $query = mysqli_query($connect, $sql);
// $lastid = mysqli_insert_id($connect);

$produtos = [];
foreach ($carrinhoProdutos as $key => $produto) {
    // $sql = "INSERT INTO product_order (user_id,product_id,quantity,order_id) VALUES ('$id_user','$id_product[$key]','$quantity_product[$key]','$lastid')";
    // $query = mysqli_query($connect, $sql);

    $sqlProduto = "SELECT * FROM tb_produtos WHERE id_produtos = $produto[produto]";
    $queryProduto = mysqli_query($conexao, $sqlProduto);

    $sqlImagens = "SELECT * FROM tb_imagem_produtos WHERE fk_id_produto = $produto[produto] LIMIT 1";
    $queryImagem = mysqli_query($conexao, $sqlImagens);

    $productImage = '';
    while ($row = mysqli_fetch_array($queryImagem)) {
        $productImage = $row['url'];
    }

    while ($row = mysqli_fetch_array($queryProduto)) {
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
    }
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
