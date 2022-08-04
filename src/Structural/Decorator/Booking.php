<?php

namespace DesignPatterns\Structural\Decorator;

interface Booking
{
    public function getPrice(): int;
    public function getDescription(): string;
}
