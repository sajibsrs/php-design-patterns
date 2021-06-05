<?php

declare(strict_types = 1);

require_once "PizzaBuilder.php";

class Pizza
{
    private int $size;
    private bool $cheese;
    private bool $pepperoni;
    private bool $bacon;
    
    public function __construct(PizzaBuilder $builder) {
        $this->size = $builder->size;
        $this->bacon = $builder->bacon;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
    }

    public function show() : string
    {
        $recipe = $this->size . " inch pizza with the following toppings: \r\n";
        $recipe .= $this->cheese ? "cheese, " : "";
        $recipe .= $this->pepperoni ? "pepperoni, " : "";
        $recipe .= $this->bacon ? "bacon, " : "";
        
        return $recipe; 
    }
}
