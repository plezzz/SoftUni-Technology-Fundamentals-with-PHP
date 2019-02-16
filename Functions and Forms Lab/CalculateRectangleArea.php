<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 08:24
 */
$sideA=readline();
$sideB=readline();

function calculateRectangleArea($x,$y){
    return $x*$y;
}

echo calculateRectangleArea($sideA,$sideB);