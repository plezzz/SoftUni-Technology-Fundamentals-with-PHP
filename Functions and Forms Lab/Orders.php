<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 08:15
 */
$product=readline();
$quantity=readline();
switch ($product){
    case "coffee": $price=1.50;break;
    case "water": $price=1.00;break;
    case "coke": $price=1.40;break;
    case "snacks": $price=2.00;break;
}
function priceCalculator($quantity,$price){
    $total=$quantity*$price;
    return $total;
}
printf("%.2f",priceCalculator($quantity,$price));