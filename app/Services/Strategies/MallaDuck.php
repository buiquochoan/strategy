<?php

namespace App\Services\Strategies;

use App\AbstractClass\Duck;
use App\StrategyClasses\FlyNoWay;
use App\StrategyClasses\Quack;

/**
 * Class MallaDuck
 * @package App\StrategyClass
 */
class MallaDuck extends Duck
{
    /**
     * MallaDuck constructor.
     */
	public function __construct()
	{
		$this->fly = new FlyNoWay();
		$this->quack = new Quack();
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
