<?php

namespace App\FactoryMethodClasses;

/**
 * Class Developer
 * @package App\FactoryMethodClasses
 */
class Developer implements Interviewer
{
    /**
     * askQuestion
     */
    public function askQuestion()
    {
        echo "ask some question for developer";
    }
}
