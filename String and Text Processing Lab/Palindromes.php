<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 12:50
 */

$string = readline();
$pattern = '/[.,!? ]/m';
$replacement = '*';
$string = preg_replace($pattern, $replacement, $string);
$words = explode("*", $string);
$words = array_filter($words);

$palindromes=[];
foreach ($words as $word){
    if ($word==strrev($word)){
        if (!in_array($word,$palindromes))
         $palindromes[]=$word;
    }
}
natcasesort($palindromes);
echo implode(", ",$palindromes);