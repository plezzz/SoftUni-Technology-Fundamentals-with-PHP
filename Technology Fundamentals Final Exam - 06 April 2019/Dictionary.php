<?php

$strings = explode(" | ", readline());
$needles = explode(" | ", readline());
$command = readline();

$dictionary = [];

foreach ($strings as $string) {
    list($word, $definition) = explode(": ", $string);
    $dictionary[$word][] = $definition;
}
ksort($dictionary);
switch ($command) {
    case "End":
        foreach ($needles as $needle) {
            if (key_exists($needle, $dictionary)) {
                $wordOne = $dictionary[$needle];
                uasort($wordOne, function ($defOne, $defTwo) {
                    $defOneLen = strlen($defOne);
                    $defTwoLen = strlen($defTwo);
                    return $defTwoLen <=> $defOneLen;
                });
                echo $needle . PHP_EOL;
                foreach ($wordOne as $definition) {
                    echo " -$definition\n";
                }
            }
        }

        break;
    case "List":
        echo implode(" ", array_keys($dictionary));
        break;
}
