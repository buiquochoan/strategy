<?php

namespace App\Http\Controllers;

use App\Services\SimpleFactories\SimpleFactoryService;

/**
 * Class SimpleFactoryController
 * @package App\Http\Controllers
 */
class SimpleFactoryController extends Controller
{
    /**
     * @var SimpleFactoryService
     */
    protected $simple_factory_service;

    /**
     * SimpleFactoryController constructor.
     * @param SimpleFactoryService $simple_factory_service
     */
    public function __construct(SimpleFactoryService $simple_factory_service)
    {
        $this->simple_factory_service = $simple_factory_service;
    }

    /**
     * action
     */
    public function action()
    {
        $this->simple_factory_service->createPizza();
    }
}
