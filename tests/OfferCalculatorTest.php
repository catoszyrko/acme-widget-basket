<?php

use PHPUnit\Framework\TestCase;
use AcmeWidgetBasket\Product;
use AcmeWidgetBasket\Services\OfferCalculator;

class OfferCalculatorTest extends TestCase
{
    private function red(): Product
    {
        return new Product('R01', 'Red Widget', 32.95);
    }

    private function green(): Product
    {
        return new Product('G01', 'Green Widget', 24.95);
    }

    public function testNoDiscountWithOneRed()
    {
        $products = [$this->red()];

        $calculator = new OfferCalculator();

        $this->assertEquals(0, $calculator->calculate($products));
    }

    public function testDiscountWithTwoReds()
    {
        $products = [
            $this->red(),
            $this->red()
        ];

        $calculator = new OfferCalculator();

        $expectedDiscount = 32.95 / 2;

        $this->assertEquals($expectedDiscount, $calculator->calculate($products));
    }

    public function testDiscountWithThreeReds()
    {
        $products = [
            $this->red(),
            $this->red(),
            $this->red()
        ];

        $calculator = new OfferCalculator();

        $expectedDiscount = 32.95 / 2;

        $this->assertEquals($expectedDiscount, $calculator->calculate($products));
    }

    public function testDiscountWithFourReds()
    {
        $products = [
            $this->red(),
            $this->red(),
            $this->red(),
            $this->red()
        ];

        $calculator = new OfferCalculator();

        $expectedDiscount = 32.95;


        $this->assertEquals($expectedDiscount, $calculator->calculate($products));
    }

    public function testOtherProductsDoNotTriggerOffer()
    {
        $products = [
            $this->green(),
            $this->green()
        ];

        $calculator = new OfferCalculator();

        $this->assertEquals(0, $calculator->calculate($products));
    }
}