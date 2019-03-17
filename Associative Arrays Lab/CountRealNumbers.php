<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/03/2019
 * Time: 10:47
 */

$input = array_map("strval",explode(" ",readline()));
$numbers=[];

for ($i = 0; $i < count($input); $i++) {
    $number = $input[$i];
    if (!key_exists($number, $numbers))
        $numbers[$number] = 0;
    $numbers[$number]++;
}
ksort($numbers);
foreach ($numbers as $number => $count) {
    echo $number . " -> " . $count . "\n";
}