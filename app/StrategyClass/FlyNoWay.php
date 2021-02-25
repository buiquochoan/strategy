<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/23/2021
 * Time: 8:25 PM
 */

namespace App\StrategyClass;

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