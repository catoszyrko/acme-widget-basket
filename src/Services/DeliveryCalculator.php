<?php

namespace AcmeWidgetBasket\Services;

class DeliveryCalculator
{
    public function calculate(float $subtotal): float
    {
        if ($subtotal < 50) {
            return 4.95;
        }

        if ($subtotal < 90) {
            return 2.95;
        }

        return 0;
    }
}