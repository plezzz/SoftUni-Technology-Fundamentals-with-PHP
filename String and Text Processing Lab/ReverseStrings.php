<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 11:54
 */

while (true){
    $input=readline();
    if ($input=="end")
        break;
   echo $input." = ".strrev($input).PHP_EOL;
}