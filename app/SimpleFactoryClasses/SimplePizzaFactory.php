<?php

namespace App\SimpleFactoryClasses;

/**
 * Class SimplePizzaFactory
 * @package App\SimpleFactoryClasses
 */
class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return CheesePizza|ClamPizza|null
     */
    public function createPizza(string $type)
    {
        switch ($type) {
            case "cheese":
                return new CheesePizza();
            case "clam":
                return new ClamPizza();
            default:
                return null;
        }
    }
}
