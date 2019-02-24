<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 24/02/2019
 * Time: 17:32
 */
$money = readline();
$arr = array_map("intval", explode(" ", readline()));
$originalArray = $arr;

while (true) {
    $input = readline();
    if ($input == "Hit it again, Gabsy!") {
        break;
    }
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] -= $input;
        if ($arr[$i] <= 0) {
            $price = $originalArray[$i] * 3;
            if ($price > $money) {
                array_splice($arr, $i, 1);
                array_splice($originalArray, $i, 1);
                $i--;
            } else {
                $arr[$i] = $originalArray[$i];
                $money -= $price;
            }
        }
    }
}
printf(implode(" ", $arr) . "\nGabsy has %.2flv.", $money);