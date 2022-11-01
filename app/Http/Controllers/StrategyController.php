<?php

namespace App\Http\Controllers;

use App\Services\Strategies\MallaDuck;
use App\Services\Strategies\ModelDuck;
use App\StrategyClasses\FlyNoWay;

/**
 * Class DuckController
 * @package App\Http\Controllers
 */
class StrategyController extends Controller
{
	/**
	 * @var MallaDuck
	 */
	protected $malla_duck;

	protected $model_duck;

    /**
     * DuckController constructor.
     * @param MallaDuck $malla_duck
     * @param ModelDuck $model_duck
     */
	public function __construct(MallaDuck $malla_duck, ModelDuck $model_duck)
	{
		$this->malla_duck = $malla_duck;
		$this->model_duck = $model_duck;
	}

    /**
     * action
     */
	public function action()
	{
		$this->malla_duck->performFly();
		echo "<br>";
		$this->malla_duck->performQuack();
		echo "model duck<br>";
		$this->model_duck->performFly();
		echo "<br>";
		$this->model_duck->setFly(new FlyNoWay());
		$this->model_duck->performFly();
	}
}
