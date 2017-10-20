<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use ShoppingCart\ShoppingCart\{ShoppingCart, Item};

// cerate items
$desktop = new Item(2, 'Desktop', 650.90, 1);
$keyboard = new Item(25, 'Keyboard', 110, 2);
$mouse = new Item(80, 'Mouse', 20, 4);
$tv = new Item(90, 'Tv', 58.20, 3);

// create a cart with items
$cart = new ShoppingCart([
    $desktop,
    $keyboard,
    $mouse,
    $tv,
], ShoppingCart::EURO);

// execute operations
echo 'With IVA: ' . $cart->calculate() . '<br />';
echo 'Without IVA: ' . $cart->calculateWithIva(23) . '<br />';
echo 'You shopping cart value is ' . $cart . '<br />';

echo '<br /><br />';
echo '<pre>';
print_r($cart->getItems());
echo '</pre>';

echo 'removed:' . $cart->removeItem([80, 2]);

// remove multiple items
$cart->removeItem([80, 2]);

echo '<pre>';
print_r($cart->getItems());
echo '</pre>';

echo $cart;
