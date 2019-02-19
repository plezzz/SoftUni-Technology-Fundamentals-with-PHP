<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/02/2019
 * Time: 12:18
 */
$arrayOne=str_split(readline());

if (count($arrayOne)%2==0){
    $middle=count($arrayOne)/2;
    $secSymbol=$arrayOne[$middle-1];
    echo "$secSymbol$arrayOne[$middle]";
}else{
    $middle=count($arrayOne)/2;
    echo $arrayOne[$middle];
}