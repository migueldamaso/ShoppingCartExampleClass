<?php 

namespace App\ShoppingCart\Contracts;

interface ItemContract 
{
    /**
     * Initialize details of the item
     *
     * @param string $name name of the item
     * @param float $value value of the item
     * @param int $quantity quantity of the item
     * @return void
     */
    public function __construct(string $name, float $value, int $quantity);

    /**
     * Get the price of the item
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Get quantity of the item
     *
     * @return int
     */
    public function getQuantity(): int;
}
