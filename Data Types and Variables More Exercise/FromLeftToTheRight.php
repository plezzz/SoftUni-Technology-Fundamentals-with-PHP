<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/02/2019
 * Time: 18:45
 */
$roll=readline();
for ($k=1;$k<=$roll;$k++) {
    $number = readline();
    $pieces = explode(" ", $number);
    if ($pieces[0] > $pieces[1]) {
        $bigNumber=abs($pieces[0]);
    } else {
        $bigNumber=abs($pieces[1]);
    }
    $sum = 0;
    for ($i = 0; $i < strlen($bigNumber); $i++) {
        $num = strval($bigNumber);
        $sum += $num[$i];
    }
    echo $sum.PHP_EOL;
}