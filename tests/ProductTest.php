<?php

use PHPUnit\Framework\TestCase;
use AcmeWidgetBasket\Product;

class ProductTest extends TestCase
{
    public function testProductProperties()
    {
        $product = new Product('R01','Red Widget',32.95);

        $this->assertEquals('R01', $product->getCode());
        $this->assertEquals('Red Widget', $product->getName());
        $this->assertEquals(32.95, $product->getPrice());
    }
}