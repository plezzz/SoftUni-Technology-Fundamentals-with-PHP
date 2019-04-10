<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 10/02/2019
 * Time: 14:42
 */
$arrayOne = explode(" ", readline());
$arrayTwo = explode(" ", readline());
$arrayThree=array_intersect($arrayOne,$arrayTwo);
echo implode(" ",$arrayThree);

