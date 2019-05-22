<?php

$input = readline();

$re = '/(?<string>.*?)/m';

preg_match_all($re, $input, $matches, PREG_SET_ORDER, 0);

$chars = [];
foreach ($matches as $match) {
    $chars[] = $match['string'];
}
$chars = array_values(array_filter($chars));
$uniques = array_unique($chars);

foreach ($uniques as $unique) {
    $keys = [];
    foreach ($chars as $key => $char) {
        if ($char == $unique) {
            $keys[] = $key;
        }
    }
    echo "$unique:" . implode("/", $keys) . PHP_EOL;
}