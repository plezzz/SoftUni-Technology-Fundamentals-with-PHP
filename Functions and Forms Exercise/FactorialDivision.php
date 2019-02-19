<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/02/2019
 * Time: 12:29
 */
$numberOne=readline();
$numberTwo=readline();
function factorialNumber($number){
    $result=1;
    for ($i = 1; $i <= $number; $i++) {
        $result=bcmul($i,$result);
    }
    return $result;
}
$firstFactoril= factorialNumber($numberOne);
$secondFactoril= factorialNumber($numberTwo);

$result=$firstFactoril/$secondFactoril;
printf("%.2f",$result);