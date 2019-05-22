<?php

$chars = [];
while (true) {
    $input = readline();
    if ($input == "end")
        break;
    $chars[] = explode(":", $input);
}
$letter = [];
foreach ($chars as $char) {
    $keys = explode("/", $char[1]);
    foreach ($keys as $key) {
        $letter[$key] = $char[0];
    }
}
ksort($letter);
echo implode("", $letter);
