<?php

session_start();

if (!array_key_exists('id', $_GET)) {
    header("Location: /");
    return;
}

$json = file_get_contents('https://titi.startwin.fr/products/' . $_GET['id']);
$product = json_decode($json, true);

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Je recupere l'id de mon produit pour ne pas reecrire a chaque fois $product['_id'] car flemme c'est trop long
$id = $product['_id'];
// Si mon produit n'existe pas dans mon panier, alors je l'ajoute en rajoutant une ligne quantitée = 1 (le array merge permet de fusionner 2 tableau)
if (!array_key_exists($id, $_SESSION['cart'])) {
    $_SESSION['cart'][$id] = array_merge($product, ['qty' => 1]);
} else {
    // Si mon produit existe deja dans panier (Si son identifiant existe en clé)
    // Alors j'incrémente de 1 sa quantitée (en allant le chercher dans cart puis via son ID puis la clé qty )
    $_SESSION['cart'][$id]['qty']++;
}


header('Location: ' . $_SERVER['HTTP_REFERER']);
