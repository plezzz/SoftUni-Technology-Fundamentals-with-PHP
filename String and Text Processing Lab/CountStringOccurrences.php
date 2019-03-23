<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 12:27
 */


$string = readline();
$occurrences = readline();
$pattern = '/[.,!? ]/m';
$replacement = '*';
$string = preg_replace($pattern, $replacement, $string);
$words = explode("*", $string);
$words = array_filter($words);

$counter = 0;
foreach ($words as $word) {
    if ($word == $occurrences)
        $counter++;
}

echo $counter;