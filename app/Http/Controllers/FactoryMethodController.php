<?php

namespace App\Http\Controllers;

use App\Services\FactoryMethods\DevelopManagerService;
use App\Services\FactoryMethods\TesterManagerService;

/**
 * Class FactoryMethodController
 * @package App\Http\Controllers
 */
class FactoryMethodController extends Controller
{
    protected $develop_interview;
    protected $tester_interview;

    /**
     * FactoryMethodController constructor.
     * @param DevelopManagerService $develop_interview
     * @param TesterManagerService $tester_interview
     */
    public function __construct(DevelopManagerService $develop_interview, TesterManagerService $tester_interview)
    {
        $this->develop_interview = $develop_interview;
        $this->tester_interview = $tester_interview;
    }

    /**
     * action
     */
    public function action()
    {
       $this->develop_interview->takeInterview();
       echo "</br>";
       $this->tester_interview->takeInterview();
    }
}
