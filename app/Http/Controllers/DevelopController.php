<?php

namespace App\Http\Controllers;

use App\Services\Strategies\MallaDuck;
use App\Services\Strategies\ModelDuck;

/**
 * Class DevelopController
 * @package App\Http\Controllers
 */
class DevelopController extends Controller
{
    protected $maladuck;
    protected $model_duck;

    public function __construct(MallaDuck $maladuck, ModelDuck $model_duck)
    {
        $this->maladuck = $maladuck;
        $this->model_duck = $model_duck;
    }

    /**
     * action
     */
    public function action()
    {
        //
        $this->maladuck->performFly();
        $this->maladuck->performQuack();
        //
        $this->model_duck->performFly();
        $this->model_duck->performQuack();
    }
}
