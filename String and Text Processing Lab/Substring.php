<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 11:42
 */

$word=readline();
$string=readline();

while (true){
    $old=$string;
    $string=str_replace($word, '', $string);
    if ($old == $string){
        echo $string;
        break;
    }
}