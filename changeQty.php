<?php

session_start();

if(!array_key_exists('action', $_GET) || !array_key_exists('id', $_GET)) {
    header("Location: /cart.php");
    return;
}

$id = $_GET['id'];

switch ($_GET['action']) {
    case 'minus':
        $_SESSION['cart'][$id]['qty']--;
        if ($_SESSION['cart'][$id]['qty'] <= 0) {
            unset($_SESSION['cart'][$id]);
        }
        break;
    
    case 'plus':
        $_SESSION['cart'][$id]['qty']++;
        break;
}

header("Location: /cart.php");