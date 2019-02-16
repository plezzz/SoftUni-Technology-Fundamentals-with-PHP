<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 00:38
 */
$command=readline();
$numberOne=readline();
$numberTwo=readline();
switch ($command){
    case "add": echo $numberOne+$numberTwo;break;
    case "multiply": echo $numberOne*$numberTwo;break;
    case "subtract": echo $numberOne-$numberTwo;break;
    case "divide": echo $numberOne/$numberTwo;break;
}