<?php

namespace DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    protected Booking $booking;
    
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
