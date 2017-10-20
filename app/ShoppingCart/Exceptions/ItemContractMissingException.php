<?php 

namespace ShoppingCart\ShoppingCart\Exceptions;

use Exception;

/**
 * Customexception to identify when some item dos not implement the mandatory methods
 */
class ItemContractMissingException extends Exception 
{
    protected $message = 'The item passed does not implement the contract "CarrinhoContract".';
}
