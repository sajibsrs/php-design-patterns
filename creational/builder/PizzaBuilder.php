<?php

declare(strict_types = 1);

class PizzaBuilder
{
    public bool $cheese;
    public bool $pepperoni;
    public bool $bacon;
    
    public function __construct(
        public int $size
    ) {}

    public function cheese(bool $presence) : PizzaBuilder
    {
        $this->cheese = $presence;
        return $this;
    }

    public function pepperoni(bool $presence) : PizzaBuilder
    {
        $this->pepperoni = $presence;
        return $this;
    }

    public function bacon(bool $presence) : PizzaBuilder
    {
        $this->bacon = $presence;
        return $this;
    }

    public function build() : PizzaBuilder
    {
        return $this;
    }
}
