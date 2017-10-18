<?php 

namespace App\ShoppingCart;

use App\ShoppingCart\Contracts\ItemContract;

final class Item implements ItemContract 
{
    /**
     * @var string name of the item
     */
    private $name;

    /**
     * @var float value of the item
     */
    private $value;

    /**
     * @var int quantity of the item
     */
    private $quantity;

    /**
     * Initialize details of the item
     *
     * @param string $name name of the item
     * @param float $value value of the item
     * @param int $quantity quantity of the item
     * @return void
     */
    public function __construct(string $name, float $value, int $quantity)
    {
        $this->name = $name;
        $this->value = $value;
        $this->quantity = $quantity;
    }

    /**
     * Set the name of the item
     *
     * @param string $name name of the item
     * @return instance of App\ShoppingCart\Item
     */
    public function setName(string $name): Item
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Return the name of the item
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name = $name;
    }

    /**
     * Set the item quantity
     *
     * @param int $quantity quantity of the item
     * @return instance of App\ShoppingCart\Item
     */
    public function setQuantity(int $quantity): Item
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity of the item
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Seth the price of the item
     *
     * @param float $value float $value
     * @return instance of App\ShoppingCart\Item
     */
    public function setValue(float $value): Item
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Get the price of the item
     *
     * @return float
     */
    public function getValue(): float
    {
        return number_format($this->value, 2);
    }

    /**
     * Increase the quantity of the item
     *
     * @param int $quantity
     * @return instance of App\ShoppingCart\Item
     */
    public function increaseQuatity(int $quantity): Item
    {
        $this->quantity += $quantity;
        return $this;
    }

    /**
     * Add extra value to the item price
     *
     * @param float $extraAmount 
     * @return instance of App\ShoppingCart\Item
     */
    public function addExtraValue(float $extraAmount): Item
    {
        $this->value += $extraAmount;
        return $this;
    }
}
