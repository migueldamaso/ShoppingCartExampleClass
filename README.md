
# Shopping Cart Class
The Shopping Cart class allows the injection of items into a cart.

To initialize this example just run this command into the root of the project.

```
$ php -S 127.0.0.1:1111 -t public public/index.php
```

**Class usage:**
```

// import package to your project
use App\ShoppingCart\{ShoppingCart, Item};

// create any items you want
$desktop = new Item(20, 'Desktop', 650.90, 1);
$keyboard = new Item(85, 'Keyboard', 110, 1);
$mouse = new Item(39, 'Mouse', 20, 4);

// create a new instance of ShoppingCart and pass the items as an array of items
$cart = new ShoppingCart([
    $desktop,
    $keyboard,
    $mouse,
], ShoppingCart::EURO);

// finnaly create operations on the cart
echo 'With IVA: ' . $cart->calculate() . '<br />';
echo 'Without IVA: ' . $cart->calculateWithIva(23) . '<br />';
echo 'You shopping cart value is ' . $cart . '<br />';

```

**Example 1:**
```
/**
 * create an item,
 * the first param is id of the item
 * the second param is the name
 * the third param amount
 * quantity
 */
$item1 = new Item(20, 'Desktop', 650.90, 1);
$item2 = new Item(50, 'Keyboard', 100.00, 2);
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
 
 **Example 6:**
 ```
 // if you wanna flush all items from the cart
 $cart->flush();
 ```
 
 **Example 7:**
 ```
 // if you wanna extract the cart itself
 echo '<pre>';
 print_r($cart->getItems());
 echo '</pre>';
 ```

 **Example 8:**
 ```
 // to remove single item from the cart, just pass the id of the item
 $cart->removeItem(25);

 // or you can remove multiple items passing an array of id's
$cart->removeItem([25, 2, 80]);
 ```
 
 More features will be documented in the future, feel free to use or modify, it's up to you!
