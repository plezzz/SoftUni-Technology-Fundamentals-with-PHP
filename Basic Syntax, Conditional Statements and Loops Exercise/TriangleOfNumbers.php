<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/01/2019
 * Time: 22:08
 */

$n = readline();
$y=$n+1;
for ($i = 1; $i <= $y; $i++) {
    for ($j = 1; $j < $i; $j++) {
        $z=$i-1;
        echo "$z ";
       // echo "$j ";
    }
    echo '' . PHP_EOL;
}