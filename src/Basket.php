<?php

namespace AcmeWidgetBasket;

use AcmeWidgetBasket\Services\DeliveryCalculator;
use AcmeWidgetBasket\Services\OfferCalculator;

class Basket
{
    private array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function total(): float
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        $offerCalculator = new OfferCalculator();
        $total -= $offerCalculator->calculate($this->products);

        $deliveryCalculator = new DeliveryCalculator();
        $total += $deliveryCalculator->calculate($total);

        return $total;
    }

    public function products(): array
    {
        return $this->products;
    }
}