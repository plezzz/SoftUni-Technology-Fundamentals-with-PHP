<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 20:11
 */
$array = array_map("intval", explode(" ", readline()));
$arrayTwo = array_map("intval", explode(" ", readline()));
$specialNumber = $arrayTwo[0];
$power = $arrayTwo[1];

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $specialNumber) {
        $array[$i] = 0;
        for ($j = 1; $j <= $power; $j++) {
            if ($i + $j >= count($array)) {
                break;
            } else {
                $array[$i + $j] = 0;;
            }
        }

        for ($k = 1; $k <= $power; $k++) {
            if ($i - $k < 0) {
                break;
            } else {
                $array[$i - $k] = 0;
            }
        }
    }
}
$result = 0;
for ($i = 0; $i < count($array); $i++) {
    $result += $array[$i];
}
echo $result;