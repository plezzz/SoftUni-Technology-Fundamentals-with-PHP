<?php

$input = readline();
$type = readline();

switch ($type) {
    case "UPPERCASE":
        $re = '/[A-Z]/';
        preg_match_all($re, $input, $matches, PREG_SET_ORDER, 0);
        $sum = 0;
        foreach ($matches as $match) {
            foreach ($match as $letter) {
                $sum += ord($letter);
            }
        }
        echo "The total sum is: $sum";
        break;
    case "LOWERCASE":
        $re = '/[a-z]/';
        preg_match_all($re, $input, $matches, PREG_SET_ORDER, 0);
        $sum = 0;
        foreach ($matches as $match) {
            foreach ($match as $letter) {
                $sum += ord($letter);
            }
        }
        echo "The total sum is: $sum";
        break;
}