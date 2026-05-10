<?php

use PHPUnit\Framework\TestCase;
use AcmeWidgetBasket\Services\DeliveryCalculator;

class DeliveryCalculatorTest extends TestCase
{
    public function testDeliveryCostUnder50()
    {
        $calculator = new DeliveryCalculator();

        $this->assertEquals(4.95, $calculator->calculate(40));
    }

    public function testDeliveryCostUnder90()
    {
        $calculator = new DeliveryCalculator();

        $this->assertEquals(2.95, $calculator->calculate(70));
    }

    public function testFreeDeliveryOver90()
    {
        $calculator = new DeliveryCalculator();

        $this->assertEquals(0, $calculator->calculate(100));
    }
}