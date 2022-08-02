<?php

namespace DesignPatterns\Structural\Adapter;

class ConcreteProduct
{
    private string $sku;

    public function __construct(string $sku)
    {
        $this->sku = $sku;
    }

    public function addToCart(): void
    {
        // Adding product to the cart
    }

    public function collect(): void
    {
        // Collect the product
    }

    public function pack(): void
    {
        // Pack the product
    }

    public function deliver(): void
    {
        // Deliver the product
    }

    public function getSku(): string
    {
        return $this->sku;
    }
}
