<?php

namespace App\StrategyClasses;

use App\Interfaces\QuackBehavior;

/**
 * Class MuteQuack
 * @package App\Strategy
 */
class MuteQuack implements QuackBehavior
{
	public function quack()
	{
		echo "i can't make a sound";
	}
}
