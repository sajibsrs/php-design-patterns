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

    public function testToStringMethod(): void
    {
        $singleton = Singleton::getInstance();

        $this->assertNotEmpty($singleton->__toString());
    }

    public function testCloneDisabled(): void
    {
        $this->expectError();
        
        $singleton = Singleton::getInstance();
        clone $singleton;

    }

    public function testUnserializeDisabled(): void
    {
        $this->expectException(Exception::class);

        $singleton = Singleton::getInstance();
        $singleton->__wakeup();
    }
}
