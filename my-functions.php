<?php

function formatPrice (int $productPrice): string
{
    return number_format($productPrice, 0, ",", $thousands_separator = " ") . " €";
}

function priceExcludingVAT (int $priceIncludingVAT): int
{
    return ($priceIncludingVAT * 100) / (100 + 20);
}
