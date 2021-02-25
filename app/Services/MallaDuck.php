<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/25/2021
 * Time: 7:39 PM
 */

namespace App\Services;

use App\AbstractClass\Duck;
use App\StrategyClass\FlyNoWay;
use App\StrategyClass\Quack;

/**
 * Class MallaDuck
 * @package App\StrategyClass
 */
class MallaDuck extends Duck
{
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