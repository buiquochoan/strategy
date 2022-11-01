<?php

namespace App\StrategyClasses;

use App\Interfaces\QuackBehavior;

/**
 * Class Squeak
 * @package App\Strategy
 */
class Squeak implements QuackBehavior
{
	public function quack()
	{
		echo "i squeak";
	}
}
