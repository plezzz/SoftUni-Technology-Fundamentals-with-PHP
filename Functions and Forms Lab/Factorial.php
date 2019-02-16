<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 17:57
 */
$number=readline();
function factorialNumber($number){
    $result=1;
    for ($i = 1; $i <= $number; $i++) {
        $result=bcmul($i,$result);
    }
    return $result;
}
echo factorialNumber($number);
