<?php

namespace DesignPatterns\Structural\Decorator;

class BookingEntryFee implements Booking
{
    public function getPrice(): int
    {
        return 20;
    }

    public function getDescription(): string
    {
        return "Entry fee";
    }
}
