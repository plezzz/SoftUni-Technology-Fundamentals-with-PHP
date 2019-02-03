<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/02/2019
 * Time: 22:03
 */
$number = intval(readline());
for ($i = 2; $i <= $number; $i++) {
    $bool = true;
    for ($divide = 2; $divide < $i; $divide++) {
        if ($i % $divide == 0) {
            $bool = false;
            break;
        }
    }

    if ($bool)
        printf("%d -> true" . PHP_EOL, $i);
    else
        printf("%d -> false" . PHP_EOL, $i);
}