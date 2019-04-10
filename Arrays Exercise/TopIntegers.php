<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 11/02/2019
 * Time: 14:12
 */

$arrayOne = explode(" ", readline());;
$lastIndex = [];
for ($i = 0; $i < count($arrayOne) - 1; $i++) {
    if ($arrayOne[$i] > $arrayOne[$i + 1]) {
        echo $arrayOne[$i] . " ";
    }
    $lastIndex = $arrayOne[$i + 1];
}
echo $lastIndex;