<?php

use app\classes\CartProducts;
use app\classes\Cart;
use app\database\models\Read;

session_start();

require "../vendor/autoload.php";

$cartProducts = new CartProducts();

// (new Cart)->clear();

$products = $cartProducts->products(new Cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Cart</title>
</head>
<body>
    <h2>Cart | <a href="/">Home</a></h2>
    <div id="container">
    <?php if(count($products['products']) <= 0):?>
        <h3>Nenhum produto no carrinho de compras</h3>
    <?php else: ?>
        <ul>
            <?php foreach($products['products'] as $product): ?>
                <li class="cart-product">
                    <?php echo $product['product'];?>
                    <form action="quantidade.php" method="get">
                        <input type="text" name="qty" value="<?php echo $product['qty']; ?>" id="cart-input-qty">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                    </form> x R$ <?php echo number_format($product['price'],2,',','.')?> | R$ <?php echo number_format($product['subtotal'],2,',','.')?>
                    <a href="remove.php?id=<?php echo $product['id']?>" id="cart-remove">Remove</a>
                </li>
            <?php endforeach?>
        </ul>

        <div id="cart-total-clear">
            <span id="cart-total">
                Total: R$ <?php echo $products['total']?>
            </span>
            <span id="cart-clear">
				<a href="clear.php">Clear Cart</a>
			</span>
        </div>
    <?php endif; ?>
    </div>
</body>
</html>