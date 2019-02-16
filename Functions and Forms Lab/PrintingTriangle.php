<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 00:45
 */

$input = readline();
for ($i = 1; $i <= $input; $i++) {
    printRow(1, $i);
}

for ($i = $input - 1; $i > 0; $i--) {
    printRow(1, $i);
}
function printRow($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "{$i} ";
    }

    echo "\n";
}