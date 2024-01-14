<?php

session_start();

if (!array_key_exists('index', $_GET)) {
    header("Location: /cart.php");
    return;
}

$index = $_GET['index'];

unset($_SESSION['cart'][$index]);

header("Location: /cart.php");
return;