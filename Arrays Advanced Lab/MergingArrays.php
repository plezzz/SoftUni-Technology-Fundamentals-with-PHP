<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 17:10
 */
$arrayOne = array_map("intval", explode(" ", readline()));
$arrayTwo = array_map("intval", explode(" ", readline()));
$counter = 0;
if (count($arrayOne) > count($arrayTwo)) {
    $count = count($arrayOne);
    for ($i = 0; $i < $count + 2; $i += 2) {

        array_splice($arrayOne, $i + 1, 0, $arrayTwo[$counter]);
        $counter++;
    }
} else {
    $count = count($arrayTwo);
    for ($i = 0; $i < $count + 2; $i += 2) {

        array_splice($arrayTwo, $i, 0, $arrayOne[$counter]);
        $counter++;
    }
    $arrayOne = $arrayTwo;
}

echo implode(" ", $arrayOne);




