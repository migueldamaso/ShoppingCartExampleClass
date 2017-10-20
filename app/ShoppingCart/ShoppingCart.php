<?php 

namespace ShoppingCart\ShoppingCart;

use ShoppingCart\ShoppingCart\Currencies;
use ShoppingCart\ShoppingCart\Contracts\{ShoppingCartContract, ItemContract};
use ShoppingCart\ShoppingCart\Exceptions\ItemContractMissingException;

final class ShoppingCart extends Currencies implements ShoppingCartContract
{
    /**
     * @var collection of ShoppingCart\ShoppingCart\Contracts\ItemContract instance
     */
    private $cart = [];

    /**
     * @var string currency symbol
     */
    private $currency;

    /**
     * Initialize the colelction of items
     *
     * @param array $items collection of App\ShoppingCart\Contracts\ItemContract instance
     * @param string $currency currency symbol
     * @return void
     */
    public function __construct(array $items = [], string $currency = '')
    {
        $this->setItems($items);
        $this->currency = $currency;
    }

    /**
     * Calculate the total amount of all items in cart
     *
     * @return float
     */
    public function calculate(): float
    {
        $total = 0;

        if (count($this->cart) > 0) {
            foreach ($this->cart as $index => $item) {
                if ($item instanceof ItemContract) {
                    $total += $item->getValue() * $item->getQuantity();
                } else {
                    throw new ItemContractMissingException('The index [' . $index . '] of ShoppingCart::$items must implement the contract "ShoppingCartContract".');
                }
            }
        }
        return number_format($total, 2);
    }

    /**
     * Calculate the total amount with IVA of all items in cart
     *
     * @param float $ivaPercentage percentage of the IVA
     * @return float
     */
    public function calculateWithIva(float $ivaPercentage = 0.0): float
    {
        $value = $this->calculate();
        return (float) ($value * ($ivaPercentage / 100)) + $value;
    }

    /**
     * Return the value without IVA and with the euro symbol
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->calculate() . ' ' . $this->currency;
    }

    /**
     * Return all items inside the cart
     *
     * @return array
     */
    public function getItems()
    {
        return $this->cart;
    }

    /**
     * Set items in cart
     *
     * @return void
     */
    public function setItems(array $items = []): void
    {
        $this->cart = count($items) > 0 ? $items : [];
    }

    /**
     * Remove all items inside the cart
     *
     * @return ShoppingCart instance
     */
    public function flush(): ShoppingCart
    {
        $this->cart = [];
        return $this;
    }

    /**
     * Remove a single item from the cart
     *
     * @param int $id of the item to remove
     * @return boolean
     */
    public function removeItem(int $id): bool
    {
        $removed = false;

        $this->cart = array_filter($this->cart, function ($item) use ($id, &$removed) {
            if ($item->getId() != $id) {
                return $item;
            } else {
                $removed = true;
            }
        });

        sort($this->cart);

        return $removed;
    }
}
