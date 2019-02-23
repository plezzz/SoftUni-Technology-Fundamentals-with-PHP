<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 20/02/2019
 * Time: 07:44
 */

$array = array_map("floatval", explode(" ", readline()));

for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] == $array[$i + 1]) {
        $array[$i] = $array[$i] + $array[$i + 1];
        array_splice($array, $i + 1, 1);
        $i = -1;
    }
}
echo implode(" ", $array);