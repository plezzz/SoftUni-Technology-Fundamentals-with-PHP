<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/02/2019
 * Time: 13:05
 */
$number = readline();
$sum = 0;
$counter = 0;
for ($i = 1; $i <= $number; $i++) {
    $temp = $i;
    while ($temp != 0) {
        $sum += $temp % 10;
        $temp /= 10;
    }
    $toString = strval($i);
    for ($j = 0; $j < strlen($toString); $j++)
                {
                    if ($toString[$j] % 2 != 0) {
                        $counter++;
                    }
                }
    if ($sum % 8 == 0 && $counter > 0) {
        echo $i.PHP_EOL;
    }
    $sum = 0;
    $counter = 0;
}
