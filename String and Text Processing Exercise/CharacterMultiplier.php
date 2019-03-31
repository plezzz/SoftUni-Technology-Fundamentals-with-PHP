<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 14:48
 */

list($strOne, $strTwo) = explode(" ", readline());
$strOneLen = strlen($strOne);
$strTwoLen = strlen($strTwo);

$minLen = Min($strOneLen, $strTwoLen);
$maxLen = Max($strOneLen, $strTwoLen);
$sum = 0;

for ($i = 0; $i < $minLen; $i++) {
    $sum += multiplyCharsASCII($strOne[$i], $strTwo[$i]);
}

if ($strOneLen != $strTwoLen) {
    $longerInput = $strOneLen > $strTwoLen ? $longerInput = $strOne : $longerInput = $strTwo;
    for ($i = $minLen; $i < $maxLen; $i++) {
        $sum += ord($longerInput[$i]);
    }
}
echo $sum;

function multiplyCharsASCII($letterOne, $letterTwo)
{
    $letterOne = ord($letterOne);
    $letterTwo = ord($letterTwo);
    $multiply = $letterOne * $letterTwo;
    return $multiply;
}
