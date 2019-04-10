<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 10/02/2019
 * Time: 14:34
 */
$roll=readline();
$people=[];
for($i=1;$i<=$roll;$i++){
    $people[]=readline();
}
$sum=0;
for($j=0;$j<count($people);$j++){
$sum+=$people[$j];
echo "$people[$j] ";
}
echo PHP_EOL.$sum;