<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 24/02/2019
 * Time: 17:13
 */
$arr = array_map("intval", explode(" ", readline()));
$totalLeft = 0;
$totalRight = 0;
for ($i = 0; $i < floor(count($arr) / 2); $i++) {
    if ($arr[$i] == 0) {
        $totalLeft = $totalLeft * 0.8;
    } else {
        $totalLeft += $arr[$i];
    }
}
for ($i = count($arr) - 1; $i > floor(count($arr) / 2); $i--) {
    if ($arr[$i] == 0) {
        $totalRight = $totalRight * 0.8;
    } else {
        $totalRight += $arr[$i];
    }
}
if ($totalLeft < $totalRight) {
    $winner = "left";
    $time = $totalLeft;
} else {
    $winner = "right";
    $time = $totalRight;
}
echo "The winner is $winner with total time: $time";