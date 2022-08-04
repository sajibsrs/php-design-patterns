<?php

use DesignPatterns\Structural\Decorator\Booking;
use DesignPatterns\Structural\Decorator\BookingBuffet;
use DesignPatterns\Structural\Decorator\BookingEntryFee;
use DesignPatterns\Structural\Decorator\BookingSingleRide;
use PHPUnit\Framework\TestCase;

/**
 * @covers \DesignPatterns\Structural\Decorator\BookingDecorator
 * @covers \DesignPatterns\Structural\Decorator\BookingSingleRide
 * @covers \DesignPatterns\Structural\Decorator\BookingEntryFee
 * @covers \DesignPatterns\Structural\Decorator\BookingBuffet
 */
final class DecoratorPatternTest extends TestCase
{
    private Booking $fee;

    public function setUp(): void
    {
        $this->fee = new BookingEntryFee();
    }

    public function testEntryFee(): void
    {
        $this->assertSame(20, $this->fee->getPrice());
        $this->assertSame("Entry fee", $this->fee->getDescription());
    }

    public function testSingleRide(): void
    {
        $ride = new BookingSingleRide($this->fee);

        $this->assertSame(40, $ride->getPrice());
        $this->assertSame("Entry fee with single ride", $ride->getDescription());
    }

    public function testBuffet(): void
    {
        $buffet = new BookingBuffet($this->fee);

        $this->assertSame(120, $buffet->getPrice());
        $this->assertSame("Entry fee with buffet", $buffet->getDescription());
    }

    public function tearDown(): void
    {
        unset($this->fee);
    }
}
