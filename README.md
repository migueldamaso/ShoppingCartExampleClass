# ShoppingCartExampleClass
Shopping Cart class that allows to inject items into cart.

To initialize this example just run this command into the root of the project.

```
$ php -S 127.0.0.1:1111 -t public public/index.php
```

Example 1:
```
/**
 * create an item,
 * the first param is the name
 * second amount
 * quantity
 */
$item1 = new Item('Desktop', 650.90, 1);
$item2 = new Item('Keyboard', 100.00, 2);
```

Example 2:
```
/**
 * Cart will take an array of items (required)
 * Currency symbol (available in \App\ShoppingCart\Currencies::class)
 */
$cart = new ShoppingCart([
    $item1,
    $item2,
], ShoppingCart::EURO);
``` 
 
 Example 3:
 ```
// calculate the amount of the cart without IVA 
echo 'Without IVA: ' . $cart->calculate() . '<br />';
// calculate the amount of the cart with IVA 
echo 'With IVA: ' . $cart->calculateWithIva(23) . '<br />';
// calculate the amount of the cart without IVA 
echo 'The cart value is ' . $cart;
 ```
