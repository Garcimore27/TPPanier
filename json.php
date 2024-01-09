<?php
session_start();

$hamburgers = "https://titi.startwin.fr/products/type/burger";
$accompagnements = "https://titi.startwin.fr/products/type/accompagnement";
$boissons = "https://titi.startwin.fr/products/type/boisson";
$desserts = "https://titi.startwin.fr/products/type/dessert";

$choixUser = "";

if(isset($_GET['choice'])){
    $choix=$_GET['choice'];
    switch ($choix){
        case 1:
            $choixUser = $accompagnements;
            break;
        case 2:
            $choixUser = $boissons;
            break;
        case 3:
            $choixUser = $desserts;
            break;   
    }
}else{
    $choixUser = $hamburgers;
}


$json = file_get_contents($choixUser);
$productsList = json_decode($json, true);
