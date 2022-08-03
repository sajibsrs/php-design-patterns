<?php

namespace DesignPatterns\Creational\Singleton;

use Exception;

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {
        // Private constructor to disable instantiation
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
        // Disable object cloning
    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    public function __toString()
    {
        return sprintf("Instance of %s class\n", self::class);
    }
}
