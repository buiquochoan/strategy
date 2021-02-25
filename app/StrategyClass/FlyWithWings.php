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