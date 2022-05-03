<?php

$name = "Produit local";
$price = 0;
$url = "https://picsum.photos/200/300";

echo '<div style="display: flex; flex-direction: column; align-items: center"><h2>';
echo $name . '</h2>' . PHP_EOL . '<h3>Prix : ' . $price . '</h3>'. PHP_EOL . '<h4>Illustration' . '</h4>' . PHP_EOL;
echo '<img src="' . $url . '"></div>';
