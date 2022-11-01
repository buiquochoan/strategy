<?php

namespace App\Services\FactoryMethods;

use App\FactoryMethodClasses\Developer;
use App\FactoryMethodClasses\HiringManager;
use App\FactoryMethodClasses\Interviewer;

/**
 * Class FactoryMethodService
 * @package App\Services\FactoryMethods
 */
class DevelopManagerService extends HiringManager
{
    /**
     * @return Interviewer
     */
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}
