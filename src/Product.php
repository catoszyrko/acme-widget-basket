<?php

namespace AcmeWidgetBasket;

class Product
{
    public function __construct(
        private string $code,
        private string $name,
        private float $price
    ) {}

    public function getCode(): string
    {
        return $this->code;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }
}