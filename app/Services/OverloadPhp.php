<?php

namespace App\Services;

/**
 * Class OverloadPhp
 * @package App\Services
 */
class OverloadPhp
{
    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }

    public function __construct1($a1)
    {
        echo('__construct with 1 param called: '.$a1.PHP_EOL);
    }

    public function __construct2($a1, $a2)
    {
        echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL);
    }

    public function __construct3($a1, $a2, $a3)
    {
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL);
    }
}
