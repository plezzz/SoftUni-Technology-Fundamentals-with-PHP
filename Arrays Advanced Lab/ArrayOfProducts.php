<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 22/02/2019
 * Time: 17:20
 */
$n = intval(readline());
$array = [];
for ($i = 0; $i < $n; $i++) {
    $element = readline();
    $array[$i] = $element;
}
sort($array);
for ($i = 0; $i < count($array); $i++) {
    echo $i + 1 . "." . $array[$i] . PHP_EOL;
}