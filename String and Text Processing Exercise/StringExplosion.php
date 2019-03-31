<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 17:55
 */

$chars = str_split(readline());
$length = 0;

for ($i = 0; $i < count($chars); $i++) {
    if ($chars[$i] == '>') {
        $length += $chars[$i + 1];
    } else {
        if ($length > 0) {
            array_splice($chars, $i, 1);
            $i--;
            $length--;
        }
    }
}
echo implode("", $chars);
