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
    <div class="w-full h-full " id="chec-div">
        <div class="w-full z-10 right-0 h-full transform translate-x-0 transition ease-in-out duration-700" id="checkout">
            <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">
                <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-32 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800  h-auto" id="scroll">
                    <?php foreach($_SESSION['cart'] as $key => $product) : ?>
                        <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
                            <div class="md:w-4/12 2xl:w-1/4 w-full">
                                <img src="https://titi.startwin.fr<?= $product['image'] ?>" alt="Black Leather Bag" class="h-full object-center object-cover md:block hidden" />
                            </div>
                            <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                                <div class="flex items-center justify-between w-full pt-1">
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white"><?= $product['name'] ?></p>
                                   <p class="text-xl leading-3 text-gray-800 dark:text-white pt-4 pb-4">
                                        Quantité :  
                                        <a href="/changeQty.php?id=<?= $product['_id'] ?>&action=minus">-</a>
                                        <?= $product['qty'] ?> 
                                        <a href="/changeQty.php?id=<?= $product['_id'] ?>&action=plus">+</a>
                                    </p>
                                </div>
                                <p class="text-xs leading-3 text-gray-600 dark:text-white pt-2"><?= $product['description'] ?></p>
                                <div class="flex items-center justify-between pt-5">
                                    <div class="flex itemms-center">
                                        <a href="removeFromCart.php?index=<?= $key ?>" class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</a>
                                    </div>
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white">Prix unitaire : <?= $product['price']['$numberDecimal'] ?> €</p>
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white">Prix total : <?= $product['price']['$numberDecimal'] * $product['qty'] ?> €</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">
                    <div class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between">
                        <div>
                            <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                                <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                                <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white"><?= $total ?>€</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
    
</body>
</html>