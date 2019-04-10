<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 11/02/2019
 * Time: 15:04
 */

$arrayOne = explode(" ", readline());

$longestSeqLength = 1;
$longestSeqStart = 0;
$currentSeqLength = 1;
$currentSeqStart = 0;

for ($i = 1; $i < count($arrayOne); $i++) {
    if ($arrayOne[$i] == $arrayOne[$i - 1]) {
        $currentSeqLength++;
        if ($currentSeqLength > $longestSeqLength) {
            $longestSeqLength = $currentSeqLength;
            $longestSeqStart = $currentSeqStart;
        }
    } else {
        $currentSeqLength = 1;
        $currentSeqStart = $i;
    }
}

for ($i = $longestSeqStart; $i < $longestSeqStart + $longestSeqLength; $i++) {
    echo $arrayOne[$i] . " ";
}