<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/23/2021
 * Time: 10:28 PM
 */

namespace App\Http\Controllers;

use App\Services\MallaDuck;
use App\Services\ModelDuck;
use App\StrategyClass\FlyNoWay;

/**
 * Class DuckController
 * @package App\Http\Controllers
 */
class DuckController extends Controller
{
	/**
	 * @var MallaDuck
	 */
	protected $malla_duck;

	protected $model_duck;

	/**
	 * DuckController constructor.
	 * @param MallaDuck $mallaDuck
	 */
	public function __construct(MallaDuck $malla_duck, ModelDuck $model_duck)
	{
		$this->malla_duck = $malla_duck;
		$this->model_duck = $model_duck;
	}

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