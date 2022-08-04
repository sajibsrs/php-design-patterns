<?php

namespace DesignPatterns\Structural\Decorator;

class BookingBuffet extends BookingDecorator
{
    private const PRICE = 100;

    public function getPrice(): int
    {
        return $this->booking->getPrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . " with buffet";
    }
}