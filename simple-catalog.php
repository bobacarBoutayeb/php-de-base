<?php

include_once 'header.php';

echo '<div style="display: flex; flex-direction: column; align-items: center">';

$products = ["Vegetables", "Seat", "Shoes"];

sort($products);
echo '<p>' . $products[0] . PHP_EOL . '</p>';
echo '<p>' . $products[count($products) -1] . '</p>';

echo '<h4>Boucle FOR :</h4>' . PHP_EOL;

for ($i = 0; $i < count($products); $i++){
    echo '<p>' . $products[$i] . '</p>' . PHP_EOL;
}

echo '</div>';

include_once 'footer.php';
