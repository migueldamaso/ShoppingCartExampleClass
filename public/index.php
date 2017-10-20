<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use ShoppingCart\ShoppingCart\{ShoppingCart, Item};

$desktop = new Item(2, 'Desktop', 650.90, 1);
$keyboard = new Item(25, 'Keyboard', 110, 1);
$mouse = new Item(80, 'Mouse', 20, 4);

$cart = new ShoppingCart([
    $desktop,
    $keyboard,
    $mouse,
], ShoppingCart::EURO);


echo 'With IVA: ' . $cart->calculate() . '<br />';
echo 'Without IVA: ' . $cart->calculateWithIva(23) . '<br />';
echo 'You shopping cart value is ' . $cart . '<br />';

echo '<br /><br />';
echo '<pre>';
print_r($cart->getItems());
echo '</pre>';

echo 'removed:' . $cart->removeItem(25);
