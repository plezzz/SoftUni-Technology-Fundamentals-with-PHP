<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 17:59
 */
$input = str_split(abs(readline()));
$even = 0;
$odd = 0;
for ($i = 0; $i < count($input); $i++) {
    if ($input[$i] % 2 == 0) {
        $even += $input[$i];
    } else {
        $odd += $input[$i];
    }
}
function multiply($x,$y){
    $result=$x*$y;
    return $result;
}
echo multiply($even,$odd);