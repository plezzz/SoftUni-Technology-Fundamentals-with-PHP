<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/02/2019
 * Time: 12:34
 */

function isPalindrome($number)
{
    $temp = $number;
    $sum = 0;

    while (floor($temp)) {
        $digit = $temp % 10;
        $sum = $sum * 10 + $digit;
        $temp = $temp / 10;
    }
    if ($sum == $number)
        return 1;
    else
        return 0;
}

$num = readline();
while ($num != "END") {
    if (isPalindrome($num))
        echo "true" . PHP_EOL;
    else
        echo "false" . PHP_EOL;
    $num = readline();
}
