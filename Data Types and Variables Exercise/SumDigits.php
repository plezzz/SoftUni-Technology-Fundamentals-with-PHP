<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 23:10
 */

$number=readline();
$sum=0;
for($i=0;$i<strlen($number);$i++){
    $num=strval($number);
    $sum+=$num[$i];
}
echo $sum;