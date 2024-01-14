<?php

session_start();

$total = 0;

foreach($_SESSION['cart'] as $product) {
    $total += $product['price']['$numberDecimal'] * $product['qty'];
}

include_once('views/cart.php');