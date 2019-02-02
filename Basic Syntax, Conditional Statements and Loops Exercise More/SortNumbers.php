<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 28/01/2019
 * Time: 13:36
 */

$number1 = readline();
$number2 = readline();
$number3 = readline();

$arr= array ($number1,$number2,$number3);
rsort($arr);

echo $arr[0].PHP_EOL;
echo $arr[1].PHP_EOL;
echo $arr[2].PHP_EOL;
