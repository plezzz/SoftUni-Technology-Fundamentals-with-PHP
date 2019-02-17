<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 14:41
 */

$products = explode(" ", readline());
$quantity = explode(" ", readline());
$price = explode(" ", readline());

$check = explode(" ", readline());

while ($check[0] != "done") {
    $key = array_search($check[0], $products);

    if ($check[1] <= isset($quantity[$key])) {
        if ($check[1] <= $quantity[$key]) {
            $priceOrder = priceCalculator($check[1], $price[$key]);
            $quantity[$key] -= $check[1];
            printf("$products[$key] x $check[1] costs %.2f" . PHP_EOL, $priceOrder);
        } else
            echo "We do not have enough $products[$key]" . PHP_EOL;
    } else
        echo "We do not have enough $products[$key]" . PHP_EOL;

    $check = explode(" ", readline());
}

function priceCalculator($quantity, $price)
{
    $result = $quantity * $price;
    return $result;
}


