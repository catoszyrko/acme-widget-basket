<?php

use PHPUnit\Framework\TestCase;
use AcmeWidgetBasket\Product;
use AcmeWidgetBasket\Basket;

class BasketTest extends TestCase
{
    public function testBasketTotal()
    {
        $products = [
            'R01' => new Product('R01','Red Widget',32.95),
            'G01' => new Product('G01','Green Widget',24.95),
            'B01' => new Product('B01','Blue Widget',7.95),
        ];

        $basket = new Basket($products);

        $basket->addProduct($products['R01']);
        $basket->addProduct($products['G01']);

        $this->assertEquals(57.90, round($basket->total(), 2));
    }
}