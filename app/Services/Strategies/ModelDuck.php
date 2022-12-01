<?php

namespace App\Services\Strategies;

use App\AbstractClass\Duck;
use App\Interfaces\FlyBehavior;
use App\Interfaces\QuackBehavior;

/**
 * Class ModelDuck
 * @package App\Services
 */
class ModelDuck extends Duck
{
	public function __construct(QuackBehavior $quack, FlyBehavior $fly)
	{
		$this->fly = $fly;
		$this->quack = $quack;
	}
}
