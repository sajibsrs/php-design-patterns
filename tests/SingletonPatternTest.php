<?php

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * @covers \DesignPatterns\Creational\Singleton\Singleton
 */
final class SingletonPatternTest extends TestCase
{
    public function testUniqueInstance(): void
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $first);
        $this->assertSame($first, $second);
    }
}
