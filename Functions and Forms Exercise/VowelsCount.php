<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 19:24
 */
function countSpecificChars ($string, $charsOfInterest) {
    $count = 0;
    $len = strlen($string);
    for ($i = 0; $i < $len; $i++) {
        if (in_array($string[$i], $charsOfInterest)) {
            $count++;
        }
    }
    return $count;
}

function countVowels ($string) {
    return countSpecificChars($string, array('a', 'e', 'i', 'o', 'u','A', 'E', 'I', 'O', 'U'));
}

echo countVowels(readline());