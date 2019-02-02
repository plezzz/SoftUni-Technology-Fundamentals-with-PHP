<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/01/2019
 * Time: 16:42
 */
$start = intval(readline());
$end = intval(readline());
$j=0;
for ($i = $start; $i <= $end; $i++) {
    echo "$i ";
    $j+=$i;
}
echo "".PHP_EOL;
echo "Sum: $j";