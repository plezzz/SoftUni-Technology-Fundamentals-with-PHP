<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 22:26
 */
$number = intval(readline());
$sum = 0;
$numberToCheck = 0;
$divide = false;
for ($i = 1; $i <= $number; $i++) {
    $numberToCheck=$i;
    while ($i > 0) {
        $sum += $i % 10;
        $i = $i / 10;
    }
    $divide = ($sum == 5) || ($sum == 7) || ($sum == 11);
    $magic = $divide ? "True" : "False";
    echo sprintf("%d -> %s", $numberToCheck, $magic) . PHP_EOL;
    $sum = 0;
    $i = $numberToCheck;
}