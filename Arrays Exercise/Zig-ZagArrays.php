<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 10/02/2019
 * Time: 15:24
 */
$roll = readline();
$arrayOne = [];
$arrayTwo = [];
for ($i = 0; $i < $roll; $i++) {
    $input = explode(" ", readline());
    if ($i % 2 == 0) {
        $arrayOne[] = $input[0];
        $arrayTwo[] = $input[1];
    } else {
        $arrayOne[] = $input[1];
        $arrayTwo[] = $input[0];
    }
}
echo implode(" ", $arrayOne) . PHP_EOL;
echo implode(" ", $arrayTwo) . PHP_EOL;