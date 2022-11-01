<?php

namespace App\FactoryMethodClasses;

/**
 * Class Tester
 * @package App\FactoryMethodClasses
 */
class Tester implements Interviewer
{
    /**
     * askQuestion
     */
    public function askQuestion()
    {
        echo "ask some question for tester";
    }
}
