<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/02/2019
 * Time: 22:22
 */

$input=readline();
if ($input >=0 && $input<=7){
    $dayName=array("Invalid Day!","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    echo $dayName[$input];
}else{
    echo "Invalid Day!";
}
