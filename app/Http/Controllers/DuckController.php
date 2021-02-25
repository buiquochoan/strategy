<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/23/2021
 * Time: 10:28 PM
 */

namespace App\Http\Controllers;

use App\Services\MallaDuck;
use App\StrategyClass\FlyWithWings;
use App\StrategyClass\MuteQuack;

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

	/**
	 * DuckController constructor.
	 * @param MallaDuck $mallaDuck
	 */
	public function __construct(MallaDuck $malla_duck)
	{
		$this->malla_duck = $malla_duck;
	}

	public function action()
	{
		$this->malla_duck->performFly();
		echo "<br>";
		$this->malla_duck->performQuack();
	}
}