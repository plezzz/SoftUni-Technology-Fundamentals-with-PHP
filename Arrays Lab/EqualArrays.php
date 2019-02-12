<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 09/02/2019
 * Time: 19:40
 */
$arrayOne = explode(" ", readline());
$arrayTwo = explode(" ", readline());
$arraySum = 0;
$isNot = true;
for ($i = 0; $i < count($arrayOne); $i++) {
    if ($arrayOne[$i] != $arrayTwo[$i]) {
        echo "Arrays are not identical. Found difference at $i index.";
        $isNot = false;
        break;
    } else {
        $arraySum += $arrayOne[$i];
    }
}
if ($isNot == true) {
    echo "Arrays are identical. Sum: $arraySum";
}