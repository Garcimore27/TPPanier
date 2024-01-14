<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once('header.php'); ?>
    <div class="grid grid-cols-4 gap-4 p-8">
        <?php foreach($products as $product) : ?>
            <div class="border-2 border-black p-2 flex flex-col justify-center">
                <h2><?= $product['name'] ?></h2>
                <img class="h-24 w-full object-cover" src="https://titi.startwin.fr<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                <p><?= $product['description'] ?></p>
                <p><?= $product['price']['$numberDecimal'] ?> €</p>
                <a href="/addToCart.php?id=<?= $product['_id'] ?>" class="text-center">Ajouter au panier</a>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>