<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/01/2019
 * Time: 22:47
 */


$amountOfMoney = doubleval(readline());
$countOfStudents = intval(readline());
$priceOfSabers = doubleval(readline());
$priceOfRobes = doubleval(readline());
$priceOfBelts = doubleval(readline());
$freeBelts = 0;

$breakSabers = ceil($countOfStudents * 0.10);
$freeBelts = floor($countOfStudents / 6);
$totalPriceOfSabers = $priceOfSabers * ($countOfStudents + $breakSabers);
$totalPriceOfRobes = $priceOfRobes * $countOfStudents;
$totalPriceOfBelts = $priceOfBelts * ($countOfStudents - $freeBelts);

$totalPrice =$totalPriceOfSabers + $totalPriceOfRobes + $totalPriceOfBelts;
if ($totalPrice <= $amountOfMoney) {
    printf("The money is enough - it would cost %.2flv.", $totalPrice);
} elseif($totalPrice>$amountOfMoney) {
    $needMoney = $totalPrice - $amountOfMoney;
    printf("Ivan Cho will need %.2flv more.", $needMoney);
}