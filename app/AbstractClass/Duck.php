<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/23/2021
 * Time: 8:36 PM
 */

namespace App\AbstractClass;

use App\Interfaces\FlyBehavior;
use App\Interfaces\QuackBehavior;

/**
 * Class Duck
 * @package App\AbstractClass
 */
abstract class Duck
{
	protected $skin;

	/** @var FlyBehavior */
	protected $fly;

	/** @var QuackBehavior */
	protected $quack;

	public function setFly(FlyBehavior $fly)
	{
		return $this->fly = $fly;
	}

	public function setQuack(QuackBehavior $quack)
	{
		return $this->quack = $quack;
	}

	public function performFly() {
		return $this->fly->fly();
	}

	public function performQuack()
	{
		return $this->quack->quack();
	}
}