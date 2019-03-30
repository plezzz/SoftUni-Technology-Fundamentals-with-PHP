<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 20:33
 */

$fibonacciNumber = readline();
$result = fib($fibonacciNumber);
echo $result;


function fib($n) {
    if ($n < 0) {
        return NULL;
    } elseif ($n === 0) {
        return 0;
    } elseif ($n === 1 || $n === 2) {
        return 1;
    } else {
        return fib($n-1) + fib($n-2);
    }
}