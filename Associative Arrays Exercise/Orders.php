<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 13:27
 */

$products = [];
while (true) {
    $input = readline();
    if ($input == "buy")
        break;
    list($product, $price, $quantity) = explode(" ", $input);
    if (key_exists($product, $products)) {
        $newQuantity = $products[$product]['quantity'] + $quantity;
        $products[$product] = ["price" => $price, "quantity" => $newQuantity];
    } else
        $products[$product] = ["price" => $price, "quantity" => $quantity];
}
foreach ($products as $product => $specification) {
    $totalPrice = $specification["price"] * $specification["quantity"];
    printf("$product -> %.2f\n", $totalPrice);
}