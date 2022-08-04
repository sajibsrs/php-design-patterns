<?php

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Adapter\Ebook;
use DesignPatterns\Structural\Adapter\ConcreteProduct;
use DesignPatterns\Structural\Adapter\PrintedBook;

/**
 * @covers DesignPatterns\Structural\Adapter\Ebook
 * @covers DesignPatterns\Structural\Adapter\ConcreteProduct
 * @covers DesignPatterns\Structural\Adapter\PrintedBook
 */
final class AdapterPatternTest extends TestCase
{
    public function testShouldPlaceEBookOrder(): void
    {
        $product        = new ConcreteProduct("SKU10");
        $printedBook    = new PrintedBook($product);
        $this->assertSame("Printed book order for sku: SKU10\n", $printedBook->placeOrder());
    }

    public function testShouldPlacePrintedBookOrder(): void
    {
        $ebook = new Ebook("SKU20");
        $this->assertSame("Ebook order for sku: SKU20\n", $ebook->placeOrder());
    }
}
