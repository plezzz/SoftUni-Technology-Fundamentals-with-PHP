<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 21:16
 */

$n=readline();
$j=1;
$sum=0;
for ($i=1;true;$i++){
    if ($i%2==0){
    }else{
        echo "$i".PHP_EOL;
        $j++;
        $sum+=$i;
    }
    if ($j>$n){
        break;
    }
}
echo "Sum: $sum";