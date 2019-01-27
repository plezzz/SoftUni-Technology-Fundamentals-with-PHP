<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 21:42
 */

while (true){
    $n=readline();
    if ($n%2==0){
        $j=abs($n);
        echo "The number is: $j".PHP_EOL;
        break;

    }else{
        echo "Please write an even number.".PHP_EOL;
    }
}