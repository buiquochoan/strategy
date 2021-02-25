<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/23/2021
 * Time: 8:31 PM
 */

namespace App\StrategyClass;

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