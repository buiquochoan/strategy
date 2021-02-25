<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/23/2021
 * Time: 8:26 PM
 */

namespace App\StrategyClass;

use App\Interfaces\QuackBehavior;

/**
 * Class Quack
 * @package App\Strategy
 */
class Quack implements QuackBehavior
{
	public function quack()
	{
		echo "Quack Quack";
	}
}