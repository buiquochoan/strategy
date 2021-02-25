<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/25/2021
 * Time: 8:57 PM
 */

namespace App\Services;

use App\AbstractClass\Duck;
use App\StrategyClass\FlyNoWay;
use App\StrategyClass\Quack;

/**
 * Class ModelDuck
 * @package App\Services
 */
class ModelDuck extends Duck
{
	public function __construct()
	{
		$this->fly = new FlyNoWay();
		$this->quack = new Quack();
	}
}