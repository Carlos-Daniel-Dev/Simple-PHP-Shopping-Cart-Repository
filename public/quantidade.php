<?php

session_start();

require "../vendor/autoload.php";

use app\classes\Cart;

$quantity = filter_input(INPUT_GET, 'qty', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

$cart = new Cart;
$cart->quantity($id, $quantity);

header('Location:cart.php');
