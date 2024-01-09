<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Burgers</a></li>
        <li><a href="index.php?choice=1">Accompagnements</a></li>
        <li><a href="index.php?choice=2">Boissons</a></li>
        <li><a href="index.php?choice=3">Desserts</a></li>
        <br>
        <hr>
        <h2>Panier en cours : <?= $_SESSION['total'] ?>€</h2>
        <?php foreach($_SESSION['Cart'] as $key => $panier) : ?>
            <ul>
                <li>
                    <a href="addPanier.php?task=remove&id=<?= $key ?>" alt="">Supprimer</a>
                    <?= $panier['name'] ?> - Prix : <?= number_format($panier['price'], 2, ',', ' ') ?>€ - Quantité : <a href="addPanier.php?task=minus&id=<?= $key ?>">  -  </a> <?= $panier['quantite'] ?><a href="addPanier.php?task=add&id=<?= $key ?>">  +</a>                    
                </li>
            </ul>
        <?php endforeach ?>

    <br>
    <hr>

    <div style="display: grid;grid-template-columns: repeat(3, 1fr);">
        <?php foreach($productsList as $key => $product) : ?>
            <div>
                <img src="https://titi.startwin.fr<?= strtr($product['image'],'\\','/') ?>" alt="" width="200" height="200">
                <p><?= $product['name'] ?></p>
                <p><?= $product['description'] ?></p>
                <p>Prix : <?= number_format($product['price']['$numberDecimal'], 2, ',', ' ') ?>€ 
                <a href="addPanier.php?task=add&id=<?= $product['_id'] ?>&name=<?= $product['name'] ?>&price=<?= $product['price']['$numberDecimal'] ?>">Ajouter au Panier</a>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>