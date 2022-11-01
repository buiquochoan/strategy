<?php

namespace App\Http\Controllers;

use App\Services\Singletons\SingletonService;

/**
 * Class SingletonController
 * @package App\Http\Controllers
 */
class SingletonController
{
    /**
     * action
     */
    public function action()
    {
       $singleton_instance = SingletonService::getInstance();
       dd($singleton_instance);
    }
}
