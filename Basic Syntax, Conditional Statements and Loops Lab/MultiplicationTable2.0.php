<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 21:35
 */

$n=intval(readline());
$start=intval(readline());

if ($start>10){
    $result=$n*$start;
    echo "$n X $start = $result".PHP_EOL;
}else{
for ($i=$start;$i<11;$i++){
    $result=$n*$i;
    echo "$n X $i = $result".PHP_EOL;
}}