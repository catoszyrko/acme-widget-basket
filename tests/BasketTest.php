<?php

use PHPUnit\Framework\TestCase;
use AcmeWidgetBasket\Product;
use AcmeWidgetBasket\Basket;

class BasketTest extends TestCase
{
    public function testBasketTotalWithDeliveryCharge()
    {
        $products = [
            'R01' => new Product('R01','Red Widget',32.95),
            'G01' => new Product('G01','Green Widget',24.95),
            'B01' => new Product('B01','Blue Widget',7.95),
        ];

        $basket = new Basket($products);

        $basket->addProduct($products['R01']);
        $basket->addProduct($products['G01']);

        $estimatedTotal = 32.95 + 24.95 + 2.95;

        $this->assertEquals(round($estimatedTotal, 2), round($basket->total(), 2));
    }

    public function testBasketTotalWithRedWidgetOffer()
    {
        $products = [
            'R01' => new Product('R01','Red Widget',32.95),
            'G01' => new Product('G01','Green Widget',24.95),
            'B01' => new Product('B01','Blue Widget',7.95),
        ];

        $basket = new Basket($products);

        $basket->addProduct($products['R01']);
        $basket->addProduct($products['R01']);

        $expectedTotal = ($products['R01']->getPrice() * 2) - ($products['R01']->getPrice() / 2) + 4.95;

        $this->assertEquals(round($expectedTotal, 2), round($basket->total(), 2));
    }
}


