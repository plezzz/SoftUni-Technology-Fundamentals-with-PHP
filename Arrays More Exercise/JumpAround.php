<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 21:27
 */

$array=array_map("intval",explode(" ",readline()));

$specialNum = $array[0];
$specialIndex = 0;
$sum = $specialNum;
while (true) {
    if (($specialIndex + $specialNum) < count($array)) {
        $sum += $array[$specialIndex + $specialNum];
        $specialIndex += $specialNum;
        $specialNum = $array[$specialIndex];
    } elseif ($specialIndex - $specialNum >= 0) {
        $sum += $array[$specialIndex - $specialNum];
        $specialIndex -= $specialNum;
        $specialNum = $array[$specialIndex];
    } else {
        break;
    }
}
echo $sum;