<?php

namespace AcmeWidgetBasket\Services;

use AcmeWidgetBasket\Product;

class OfferCalculator
{
    /**
     * @param Product[] $products
     */
    public function calculate(array $products): float
    {
        $redCount = 0;
        $redPrice = 0;

        foreach ($products as $product) {
            if ($product->getCode() === 'R01') {
                $redCount++;

                if ($redPrice === 0) {
                    $redPrice = $product->getPrice();
                }
            }
        }

        $pairs = floor($redCount / 2);

        return $pairs * ($redPrice / 2);
    }
}