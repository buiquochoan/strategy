<?php

namespace App\Services\SimpleFactories;

use App\SimpleFactoryClasses\SimplePizzaFactory;

/**
 * Class SimpleFactory
 * @package App\Services\SimpleFactories
 */
class SimpleFactoryService
{
    public $simple_pizza_factory;

    /**
     * SimpleFactoryService constructor.
     * @param SimplePizzaFactory $simple_pizza_factory
     */
    public function __construct(SimplePizzaFactory $simple_pizza_factory)
    {
        $this->simple_pizza_factory = $simple_pizza_factory;
    }

    /**
     * createPizza
     */
    public function createPizza()
    {
        $this->simple_pizza_factory->createPizza('cheese');
    }
}
