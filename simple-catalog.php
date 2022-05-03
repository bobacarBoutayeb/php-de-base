<?php

include_once 'header.php';

$products = ["Légumes", "Chaise", "Chaussure"];

sort($products);
echo $products[0] . PHP_EOL;
echo $products[count($products) -1];

include_once 'footer.php';
