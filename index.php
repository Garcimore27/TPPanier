<?php

// Si le type existe dans l'url en GET, alors je le stocke dans $type, sinon je prend burger par defaut
$type = $_GET['type'] ?? 'burger';
// Je récupère les produits du type défini au dessus
$json = file_get_contents('https://titi.startwin.fr/products/type/' . $type);
// Je decode en json en tableau
$products = json_decode($json, true);

// var_dump($_SERVER);

require_once('views/home.php');