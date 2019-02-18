<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 11/02/2019
 * Time: 23:22
 */


$arrayOne = explode(" ", readline());
for ($i = 0; $i < count($arrayOne); $i++) {
    $arrayOne[$i] = intval($arrayOne[$i]);
}

$magicSum = intval(readline());

for ($i = 0; $i < count($arrayOne) - 1; $i++) {
    $firstNum = $arrayOne[$i];

    for ($j = $i + 1; $j < count($arrayOne); $j++) {
        $secondNum = $arrayOne[$j];

        if ($firstNum + $secondNum === $magicSum) {
            echo $firstNum . " " . $secondNum . PHP_EOL;
        }
    }
}