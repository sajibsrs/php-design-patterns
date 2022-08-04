<?php

namespace DesignPatterns\Structural\Decorator;

class BookingSingleRide extends BookingDecorator
{
    private const PRICE = 20;

    public function getPrice(): int
    {
        return $this->booking->getPrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . " with single ride";
    }
}
