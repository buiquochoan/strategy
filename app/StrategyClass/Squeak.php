<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/23/2021
 * Time: 8:30 PM
 */

namespace App\StrategyClass;

use App\Interfaces\QuackBehavior;

/**
 * Class Squeak
 * @package App\Strategy
 */
class Squeak implements QuackBehavior
{
	public function quack()
	{
		echo "i squeak";
	}
}