<?php

use DesignPatterns\Behavioral\TemplateMethod\Animal;
use DesignPatterns\Behavioral\TemplateMethod\Bird;
use DesignPatterns\Behavioral\TemplateMethod\Fish;
use PHPUnit\Framework\TestCase;

/**
 * @covers \DesignPatterns\Behavioral\TemplateMethod\Fish
 * @covers \DesignPatterns\Behavioral\TemplateMethod\Bird
 * @covers \DesignPatterns\Behavioral\TemplateMethod\Animal
 */
final class TemplateMethodPatternTest extends TestCase
{
    public function testFishCanSwim(): void
    {
        $fish = new Fish();

        $this->assertSame("Fish swims", $fish->swim());
    }

    public function testFishDoNotFly(): void
    {
        $fish = new Fish();

        $this->assertSame("Fish don't fly", $fish->fly());
    }

    public function testBirdDoNotSwim(): void
    {
        $bird = new Bird();

        $this->assertSame("Bird don't swim", $bird->swim());
    }

    public function testBirdCanFly(): void
    {
        $bird = new Bird();

        $this->assertSame("Bird flies", $bird->fly());
    }

    public function testTemplateMethodIsBeingCalled(): void
    {
        $bird = new Bird();

        $this->assertSame("DesignPatterns\Behavioral\TemplateMethod\Animal", $bird->do());
    }
}
