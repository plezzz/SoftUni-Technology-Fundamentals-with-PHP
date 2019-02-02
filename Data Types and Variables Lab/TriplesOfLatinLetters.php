<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 22:02
 */

$n = readline();
for ($i = 1; $i <= $n; $i++) {
    $stri = chr(96 + $i);
    for ($j = 1; $j <= $n; $j++) {
        $strj = chr(96 + $j);
        for ($k = 1; $k <= $n; $k++) {
            $strk = chr(96 + $k);
            echo "$stri$strj$strk" . PHP_EOL;

        }
    }
}