<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 04/02/2019
 * Time: 14:50
 */
$roll = readline();
$numbers=array();
for($i=1;$i<=$roll;$i++){
    $numbers[]=readline();
}
for ($k=$roll-1;$k>=0;$k--) {
    echo "$numbers[$k] ";
}