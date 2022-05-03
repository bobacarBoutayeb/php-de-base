<?php

include_once 'header.php';

$products = [
    "seat" => [
        "name" => "seat",
        "price" => 450,
        "weight" => 2,
        "discount" => 10,
        "picture_url" => "Static/img/home/deco.png",
    ],
    "shoes" => [
        "name" => "shoes",
        "price" => 100,
        "weight" => 400,
        "discount" => 20,
        "picture_url" => "Static/img/home/mode.png",
    ],
];

echo '<div>';
echo '<h3>' . ucfirst($products["seat"]["name"]) . '</h3>';
echo '<p> Prix : ' . $products["seat"]["price"] . '</p>';
echo '<p> Poids : ' . $products["seat"]["weight"] . ' g</p>';
echo '<img src ="' . $products["seat"]["picture_url"] . '">';
echo '<p> Remise : ' . $products["seat"]["discount"] . ' %</p>';
echo '</div>';

echo '<div>';
echo '<h3>' . ucfirst($products["shoes"]["name"]) . '</h3>';
echo '<p> Prix : ' . $products["shoes"]["price"] . '</p>';
echo '<p> Poids : ' . $products["shoes"]["weight"] . ' g</p>';
echo '<img src ="' . $products["shoes"]["picture_url"] . '">';
echo '<p> Remise : ' . $products["shoes"]["discount"] . ' %</p>';
echo '</div>';

include_once 'footer.php';
