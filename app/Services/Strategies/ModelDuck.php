<?php

namespace App\Services\Strategies;

use App\AbstractClass\Duck;
use App\StrategyClasses\FlyNoWay;
use App\StrategyClasses\FlyWithWings;
use App\StrategyClasses\Quack;

/**
 * Class ModelDuck
 * @package App\Services
 */
class ModelDuck extends Duck
{
	public function __construct()
	{
		$this->fly = new FlyWithWings();
		$this->quack = new Quack();
	}
}
