<?php

require 'vendor/autoload.php';

use AcmeWidgetBasket\Product;

$product = new Product('R01','Red Widget',32.95);

echo $product->getName();
echo "\n";
echo $product->getPrice();
echo "\n";
echo $product->getCode();
echo "\n";

