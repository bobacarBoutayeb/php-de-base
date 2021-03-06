<?php

include_once 'header.php';

$vegetables = [
    "name" => "Mushrooms",
    "price" => 30.11,
    "weight" => 1,
    "discount" => 50,
    "picture_url" => 'Static/img/small-produce-box 5.png',
];

echo '
    <div>
        <h3>' . $vegetables["name"] . '</h3>
        <p> Prix : ' . formatPrice($vegetables["price"]) . ' TTC</p>
        <p> Prix : ' . formatPrice(priceExcludingVAT($vegetables["price"])) . ' HT</p>
        <p> Remise : ' . $vegetables["discount"] . ' %</p>
        <p> Prix remisé : ' . formatPrice(discountedPrice($vegetables["price"], $vegetables["discount"])) . ' TTC</p>
        <p> Poids : ' . $vegetables["weight"] . ' kg</p>
        <img src ="' . $vegetables["picture_url"] . '" alt = "">
    </div>
    ';

include_once 'footer.php';
