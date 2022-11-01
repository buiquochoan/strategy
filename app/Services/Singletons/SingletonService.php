<?php

namespace App\Services\Singletons;

/**
 * Class SingletonService
 * @package App\Services\Singleton
 */
class SingletonService
{
    /** @var SingletonService|null  */
    private static $instance = null;

    /**
     * __clone
     */
    private function __clone() {}

    /**
     * SingletonService constructor.
     */
    private function __construct() {}

    /**
     * getInstance
     */
    public static function getInstance(): SingletonService
    {
        if (self::$instance == null) {
            self::$instance = new SingletonService();
        }

        return self::$instance;
    }
}
