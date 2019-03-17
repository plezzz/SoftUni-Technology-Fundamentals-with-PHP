<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/03/2019
 * Time: 10:38
 */

$text = readline();
$letters = [];

for ($i = 0; $i < strlen($text); $i++) {
    $char = $text[$i];
    if (!key_exists($char, $letters))
        $letters[$char] = 0;
    $letters[$char]++;
}
foreach ($letters as $letter => $count) {
    echo $letter . " -> " . $count . "\n";
}