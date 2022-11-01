<?php

namespace App\Services\FactoryMethods;

use App\FactoryMethodClasses\HiringManager;
use App\FactoryMethodClasses\Interviewer;
use App\FactoryMethodClasses\Tester;

/**
 * Class TesterManagerService
 * @package App\Services\FactoryMethods
 */
class TesterManagerService extends HiringManager
{
    /**
     * @return Interviewer
     */
    protected function makeInterviewer(): Interviewer
    {
        return new Tester();
    }
}
