<?php

namespace App\Services\Strategies;

use App\AbstractClass\Duck;
use App\Interfaces\FlyBehavior;
use App\Interfaces\QuackBehavior;

/**
 * Class MallaDuck
 * @package App\StrategyClass
 */
class MallaDuck extends Duck
{
    /**
     * MallaDuck constructor.
     */
	public function __construct(QuackBehavior $quack, FlyBehavior $fly)
	{
		$this->fly = $fly;
		$this->quack = $quack;
	}


	public function display()
	{
		// TODO: Implement display() method.
	}

	public function swim()
	{
		// TODO: Implement swim() method.
	}
}
