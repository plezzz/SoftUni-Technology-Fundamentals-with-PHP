<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 18:29
 */

$firstNumber=intval(readline());
$secondNumber=intval(readline());
$thirdNumber=intval(readline());
$fourthNumber=intval(readline());

$result=(intval(($firstNumber+$secondNumber)/$thirdNumber))*$fourthNumber;
echo $result;