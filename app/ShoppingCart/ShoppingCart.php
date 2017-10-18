<?php 

namespace App\ShoppingCart;

use App\ShoppingCart\Currencies;
use App\ShoppingCart\Contracts\{ShoppingCartContract, ItemContract};
use App\ShoppingCart\Exceptions\ItemContractMissingException;

final class ShoppingCart extends Currencies implements ShoppingCartContract
{
    /**
     * @var collection of App\ShoppingCart\Contracts\ItemContract instance
     */
    private $carrinho = [];

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
        if (count($items) > 0) {
            $this->carrinho = $items;
        }
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

        if (count($this->carrinho) > 0) {
            foreach ($this->carrinho as $index => $item) {
                if ($item instanceof ItemContract) {
                    $total += $item->getValue() * $item->getQuantity();
                } else {
                    throw new ItemContractMissingException('The index [' . $index . '] of CarrinhoDeCompras::$items must implement the contract "CarrinhoContract".');
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
}