<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 18:25
 */
$numberOne = readline();
$command = readline();
$numberTwo = readline();
function math($numberOne, $numberTwo, $command)
{
    switch ($command) {
        case "+":
            return $numberOne + $numberTwo;
            break;
        case "*":
            return $numberOne * $numberTwo;
            break;
        case "/":
            return $numberOne / $numberTwo;
            break;
        case "-":
            return $numberOne - $numberTwo;
            break;
    }
}

printf("%.2f", math($numberOne, $numberTwo, $command));