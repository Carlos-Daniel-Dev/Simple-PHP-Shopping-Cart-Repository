<?php

use app\classes\Cart;

session_start();

require "../vendor/autoload.php";

$products = require '../app/helpers/products.php';

$productsInCart = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div id="container">
    <h3>Cart: <?= count($productsInCart) ?></h3>
    <ul>
    <?php foreach($products as $index => $product ): ?>
        <li><?= $product['name'];?> | R$<?= number_format($product['price'], 2, ',','.');?></li> <a href="add.php?id=<?= $index ?>">add to cart</a>
    <?php endforeach; ?>
    </ul>
</div>

</body>
</html>