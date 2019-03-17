<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/03/2019
 * Time: 11:12
 */

$words=array_map("strtolower",explode(" ",readline()));
$occurrences =[];

foreach ($words as $word){
    if (!key_exists($word, $occurrences))
        $occurrences[$word] = 0;
    $occurrences[$word]++;
}
foreach ($occurrences as $key=>$value){
    if ($value%2!==0){
        echo $key." ";
    }
}