<?php

namespace DesignPatterns\Structural\Adapter;

class PrintedBook implements Product
{
    private ConcreteProduct $product;

    public function __construct(ConcreteProduct $product)
    {
        $this->product = $product;
    }
    
    public function placeOrder(): string
    {   
        $this->product->addToCart();
        $this->product->collect();
        $this->product->pack();
        $this->product->deliver();

        return sprintf("Printed book order for sku: %s\n", $this->product->getSku());
    }
}
