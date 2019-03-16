<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 10/03/2019
 * Time: 14:16
 */

$words = explode(" ", readline());

while (true) {
    $input = readline();
    if ($input == "Stop")
        break;
    list($command, $tokenOne, $tokenTwo) = array_pad(explode(" ", $input), 3, null);

    switch ($command) {
        case "Delete":
            $index = $tokenOne + 1;
            if ($index < count($words) && $index >= 0)
                array_splice($words, $index, 1);
            break;
        case "Swap":
            if (in_array($tokenOne, $words)) {
                if (in_array($tokenTwo, $words)) {
                    $keyOne = array_search($tokenOne, $words);
                    $keyTwo = array_search($tokenTwo, $words);
                    $temp = $words[$keyOne];
                    array_splice($words, $keyOne, 1, $words[$keyTwo]);
                    array_splice($words, $keyTwo, 1, $temp);
                }
            }
            break;
        case "Put":
            $index = $tokenTwo - 1;
            if ($index < count($words)+1 && $index >= 0){
                array_splice($words, $index, 0, $tokenOne);
            }
            break;
        case "Sort":
            rsort($words);
            break;
        case "Replace":
            if (in_array($tokenTwo, $words)) {
                $key = array_search($tokenTwo, $words);
                array_splice($words, $key, 1, $tokenOne);
            }
            break;
    }
}
echo implode(" ",$words);