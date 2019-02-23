<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 19/02/2019
 * Time: 22:28
 */
$input =array_map("intval", explode(" ", readline()));
for ($i = 0; $i < count($input); $i++) {
    if ($input[$i] < 0) {
        array_splice($input, $i, 1);
        $i--;
    }
}
if (count($input) == 0)
    echo "empty";
else
    echo implode(" ", array_reverse($input)) . PHP_EOL;