<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 23:58
 */

$str = readline();
$check=ord($str);
if ($check>=97){
    echo "lower-case";
}else{
    echo "upper-case";
}