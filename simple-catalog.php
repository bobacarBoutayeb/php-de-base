<?php

include_once 'header.php';

$products = ["Vegetables", "Seat", "Shoes"];

sort($products);
echo $products[0] . PHP_EOL;
echo $products[count($products) -1];

include_once 'footer.php';
