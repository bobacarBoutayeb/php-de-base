<?php

function formatPrice (float $productPrice): string
{
    return number_format($productPrice, 2, ",", $thousands_separator = " ") . " €";
}

function priceExcludingVAT (float $priceIncludingVAT): float
{
    return ($priceIncludingVAT * 100) / (100 + 20);
}

function discountedPrice (float $price, float $discount): float
{
    return $price * (1 - ($discount / 100));
}
