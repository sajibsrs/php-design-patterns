<?php

namespace DesignPatterns\Structural\Adapter;

class ConcreteProduct
{
    private string $sku;

    public function __construct(string $sku)
    {
        $this->sku = $sku;
    }

    public function addToCart(): string
    {
        return sprintf("Product with sku: %s added to cart\n", $this->sku);
    }

    public function collect(): string
    {
        return sprintf("Product with sku: %s being collected\n", $this->sku);
    }

    public function pack(): string
    {
        return sprintf("Product with sku: %s being packed\n", $this->sku);
    }

    public function deliver(): string
    {
        return sprintf("Product with sku: %s being delivered\n", $this->sku);
    }

    public function getSku(): string
    {
        return $this->sku;
    }
}
