<?php

namespace App\StrategyClasses;

use App\Interfaces\FlyBehavior;

/**
 * Class FlyNoWay
 * @package App\Strategy
 */
class FlyNoWay implements FlyBehavior
{
	public function fly()
	{
		echo "I can't fly";
	}
}
