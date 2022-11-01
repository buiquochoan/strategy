<?php

namespace App\StrategyClasses;

use App\Interfaces\FlyBehavior;

/**
 * Class FlyWithWings
 * @package App\Strategy
 */
class FlyWithWings implements FlyBehavior
{
	public function fly()
	{
		echo "i can fly";
	}
}
