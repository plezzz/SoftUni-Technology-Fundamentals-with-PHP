<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 24/02/2019
 * Time: 22:30
 */

$arrayOne = explode(" ", readline());
$arrayTwo = explode(" ", readline());
$arrayThree = [];

if (count($arrayOne) > count($arrayTwo)) {
    $range = array_splice($arrayOne, count($arrayOne) - 2, 2);
    $loop = count($arrayTwo);
} else {
    $range = array_splice($arrayTwo, 0, 2);
    $loop = count($arrayOne);
}
array_reverse($arrayTwo);
for ($i = 0; $i < $loop; $i++) {
    $arrayThree[] = $arrayOne[$i];
    $arrayThree[] = $arrayTwo[$i];
}
sort($range);

$result = array_filter($arrayThree, function ($el) use ($range) {
    return ($el > $range[0] && $el < $range[1]);
});

sort($result);
echo implode(" ", $result);