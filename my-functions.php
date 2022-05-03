<?php

function formatPrice (int $productPrice): string
{
    return number_format($productPrice, 0, ",", $thousands_separator = " ") . " €";
}
