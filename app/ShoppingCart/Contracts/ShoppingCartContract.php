<?php 

namespace ShoppingCart\ShoppingCart\Contracts;

interface ShoppingCartContract 
{
    /**
     * Initialize the colelction of items
     *
     * @param array $items collection of App\ShoppingCart\Contracts\ItemContract instance
     * @param string $currency currency symbol
     * @return void
     */
    public function __construct(array $items = [], string $currency = '');

    /**
     * Calculate the total amount of all items in cart
     *
     * @return float
     */
    public function calculate(): float;

    /**
     * Calculate the total amount with IVA of all items in cart
     *
     * @param float $ivaPercentage percentage of the IVA
     * @return float
     */
    public function calculateWithIva(float $ivaPercentage = 0.0): float;
}
