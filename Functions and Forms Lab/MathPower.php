<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 17:56
 */
$number=readline();
$power=readline();
function powerNumber($number,$power){
    $result =pow($number,$power);
    return $result;
}
echo powerNumber($number,$power);