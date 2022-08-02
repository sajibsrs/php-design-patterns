<?php

namespace DesignPatterns\Structural\Adapter;

class Ebook implements Product
{
    private string $sku;

    public function __construct(string $sku)
    {
        $this->sku = $sku;
    }

    public function placeOrder(): string
    {
        return sprintf("Ebook order for sku: %s\n", $this->sku);
    }
}
