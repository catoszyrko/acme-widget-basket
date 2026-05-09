<?php

namespace AcmeWidgetBasket;

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

        return $total;
    }

    public function products(): array
    {
        return $this->products;
    }
}