<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 19:15
 */
$numberOne = readline();
$numberTwo = readline();
$numberThree = readline();

function minNumber($numberOne, $numberTwo, $numberThree)
{
    $result = min($numberOne, $numberTwo, $numberThree);
    return $result;
}

echo min($numberOne,$numberTwo,$numberThree);