# ShoppingCartExampleClass
The Shopping Cart class allows the injection of items into a cart.

To initialize this example just run this command into the root of the project.

```
$ php -S 127.0.0.1:1111 -t public public/index.php
```

**Example 1:**
```
/**
 * create an item,
 * the first param is the name
 * the second the price
 * and the third it's quantity
 */
$item1 = new Item('Desktop', 650.90, 1);
$item2 = new Item('Keyboard', 100.00, 2);
```

**Example 2:**
```
/**
 * The ShoppingCart will take an array of Items (required)
 * Currency symbol (available in \App\ShoppingCart\Currencies::class)
 */
$cart = new ShoppingCart([
    $item1,
    $item2,
], ShoppingCart::EURO);
``` 
 
 **Example 3:**
 ```
// calculate the total price of the items in the cart without IVA 
echo 'Without IVA: ' . $cart->calculate() . '<br />';

// calculate the total price of the items in the cart with IVA 
echo 'With IVA: ' . $cart->calculateWithIva(23) . '<br />';

// calculate the total price of the items in the cart without IVA 
echo 'The cart value is ' . $cart;
 ```
 
 **Example 4:**
 ```
 /**
  * In items you can do some operations like adding an extra value or increase the amount
  * these operations ca be chained
  */
$item = new Item('Desktop', 560.30, 1);
$item->increaseQuatity(1)->addExtraValue(10.20);
 ```
 **Example 5:**
 ```
 /**
  * Currencies simbols can be accessed as static properties like the example below
  * All symbols are placed into App\ShoppingCart\Currencies abstract class
  */
 // will return € simbol
 $euro = ShoppingCart::EURO;
  
 // will return $ simbol
 $dollar = ShoppingCart::DOLLAR;
 ```
 
 More features will be documented in the future, feel free to use or modify, it's up to you!
