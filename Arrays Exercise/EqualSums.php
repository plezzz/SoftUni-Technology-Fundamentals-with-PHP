<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 11/02/2019
 * Time: 14:13
 */

$arrayOne = explode(" ", readline());
for ($i = 0; $i < count($arrayOne); $i++) {
    $leftSum = 0;
    $rightSum = 0;
    for ($j = 0; $j < $i; $j++) {
        $leftSum += $arrayOne[$j];
    }
    for ($k = $i + 1; $k < count($arrayOne); $k++) {
        $rightSum += $arrayOne[$k];
    }
    if ($leftSum == $rightSum) {
        echo $i;
        return;
    }
}
echo "no";
