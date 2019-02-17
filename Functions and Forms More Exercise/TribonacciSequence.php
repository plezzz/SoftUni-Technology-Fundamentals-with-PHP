<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 13:02
 */

$num = readline();
$tribonacci = [1, 1, 2];
for ($i = 3; $i < $num; $i++)
    $tribonacci[$i] = $tribonacci[$i - 1] + $tribonacci[$i - 2] + $tribonacci[$i - 3];
for ($i = 0; $i < $num; $i++)
    echo "$tribonacci[$i] ";