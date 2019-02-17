<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 13:33
 */

$products = explode(" ", readline());
$quantity = explode(" ", readline());
$price = explode(" ", readline());

$check = readline();
while ($check != "done") {
    $key = array_search($check, $products);
    echo "$products[$key] costs: $price[$key]; Available quantity: $quantity[$key]".PHP_EOL;
    $check = readline();
}




