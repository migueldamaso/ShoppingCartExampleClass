<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use App\ShoppingCart\{ShoppingCart, Item};

$desktop = new Item('Desktop', 650.90, 1);
$teclado = new Item('Teclado', 110, 1);
$rato = new Item('Rato', 20, 4);

$carrinho = new ShoppingCart([
    $desktop,
    $teclado,
    $rato,
], ShoppingCart::EURO);

echo 'Sem IVA: ' . $carrinho->calculate() . '<br />';
echo 'Com IVA: ' . $carrinho->calculateWithIva(23) . '<br />';
echo 'O valor do carrinho é ' . $carrinho . '<br />';
