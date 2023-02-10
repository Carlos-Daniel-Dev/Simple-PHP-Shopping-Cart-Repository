<?php

session_start();

require "../vendor/autoload.php";

use app\classes\Cart;

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

(new Cart)->clear();

header('Location: cart.php');
