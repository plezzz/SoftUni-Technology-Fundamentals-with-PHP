<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 20:31
 */
$number = readline();

for ($i = 1; $i <= (int)$number; $i++) {
    $sum = 0;
    for ($j = 0; $j < strlen($i); $j++) {
        $i2 = strval($i);
        $sum += $i2[$j];
    }
    if ($sum == 5 || $sum == 7 || $sum == 11) {
        echo "$i -> True" . PHP_EOL;
    } else {
        echo "$i -> False" . PHP_EOL;
    }
}