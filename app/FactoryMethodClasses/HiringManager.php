<?php

namespace App\FactoryMethodClasses;

/**
 * Class HiringManager
 * @package App\FactoryMethodClasses
 */
abstract class HiringManager
{
    /**
     * @return Interviewer
     */
    abstract protected function makeInterviewer(): Interviewer;

    /**
     * takeInterview
     */
    public function takeInterview()
    {
       $interviewer = $this->makeInterviewer();
       $interviewer->askQuestion();
    }
}
