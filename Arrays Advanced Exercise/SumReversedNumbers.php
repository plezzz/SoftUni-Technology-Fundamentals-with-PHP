<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 20:53
 */
$array = array_map("intval", explode(" ", readline()));
$sum=0;
for($i=0;$i<count($array);$i++){
$revNum=strrev($array[$i]);
$sum+=$revNum;
}
echo $sum;