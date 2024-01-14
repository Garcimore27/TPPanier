<?php

// 
$json = file_get_contents('https://titi.startwin.fr/products/type/accompagnement');
$products = json_decode($json, true);

require_once('views/home.php');