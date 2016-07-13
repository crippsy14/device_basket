<?php
/**
 * User: Richard Cripps
 * Date: 12/07/2016
 * Time: 21:13
 */
class Silk_Basket_Block_Hello extends Mage_Core_Block_Abstract
{
    protected function _construct()
    {
       
    }

    public function helloThere($string)
    {
        return sprintf('Everyone is jealous because: %s', $string);
    }
    
}