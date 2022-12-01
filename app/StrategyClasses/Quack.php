<?php

namespace App\StrategyClasses;

use App\Interfaces\QuackBehavior;

/**
 * Class Quack
 * @package App\Strategy
 */
class Quack implements QuackBehavior
{
	public function quack()
	{
		echo "Quack Quack <br>";
	}
}
