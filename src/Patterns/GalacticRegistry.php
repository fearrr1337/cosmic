<?php

// namespace Patterns;
class GalacticRegistry
{
    private static ?self $instance = null;

    private function __construct()
    {
        echo "Конструктор отработал";
    }

    private function __clone(): void
    {
    }

    public function __wakeup(): void
    {
        throw new \Exception("Десериализация запрещена");
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}