<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 12:14
 */


for ($i = 1; $i <= 8; $i++) {
    $points[] = readline();
}

$points = array(
    'x1' => $points[0],
    'y1' => $points[1],
    'x2' => $points[2],
    'y2' => $points[3],
    'z1' => $points[4],
    'w1' => $points[5],
    'z2' => $points[6],
    'w2' => $points[7]);

$first = findLogestPoint($points['x1'], $points['y1'], $points['x2'], $points['y2']);
$secound = findLogestPoint($points['z1'], $points['w1'], $points['z2'], $points['w2']);

if ($first >= $secound) {
    findClosestPoint($points['x1'], $points['y1'], $points['x2'], $points['y2']);
} else {
    findClosestPoint($points['z1'], $points['w1'], $points['z2'], $points['w2']);
}

function findLogestPoint($x1, $y1, $x2, $y2)
{
    $sum = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
    return $sum;
}

function findClosestPoint($x1, $y1, $x2, $y2)
{
    $first = sqrt(pow($y1, 2) + pow($x1, 2));
    $secound = sqrt(pow($y2, 2) + pow($x2, 2));

    if ($first < $secound) {
        echo "($x1, $y1)($x2, $y2)";
    } else {
        echo "($x2, $y2)($x1, $y1)";
    }
}


