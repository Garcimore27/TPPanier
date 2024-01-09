<?php
session_start();
    
    //Si un panier n'existe pas déjà
    if (!array_key_exists('Cart', $_SESSION)){
        $_SESSION['Cart'] = [];
    }
    //var_dump($_SESSION['Cart']);die;
    //essayer in_array /// $key = array_search();
    $idProduct = $_GET['id'];
    
    switch ($_GET['task']){
        case 'add' :
            addCart($idProduct); 
            break;
        case 'minus' :
            minusCart($idProduct);
            break;
        case 'remove' :
            removeCart($idProduct);
            break;  
    }
    
    function addCart(string $id){
        
        if($_SESSION['Cart'][$id]) {
            $_SESSION['Cart'][$id]['quantite'] += 1;;
        }else{
            
            $_SESSION['Cart'][$id] = [
                'quantite' => 1,
                'name' => $_GET['name'],
                'price' => $_GET['price']
            ];
        }
    }

    function minusCart(string $id){
        if($_SESSION['Cart'][$id]) {
            if($_SESSION['Cart'][$id]['quantite'] == 1) {
                unset($_SESSION['Cart'][$id]);
            }
            else{
                $_SESSION['Cart'][$id]['quantite'] -= 1;
            }
        }
    }

    function removeCart(string $id){
        if($_SESSION['Cart'][$id]) {
                unset($_SESSION['Cart'][$id]);
        }
    }

    function totalCart(){
        $total=0;
        foreach($_SESSION['Cart']as $key => $value){
            $total += ($value['quantite'] * $value['price']);
        }
        return $total;
    }

    $totalPanier = totalCart();
    if (!array_key_exists('total', $_SESSION)){
        $_SESSION['total'] = 0;
    }else{
        $_SESSION['total'] = $totalPanier;
    }

header("Location: /");