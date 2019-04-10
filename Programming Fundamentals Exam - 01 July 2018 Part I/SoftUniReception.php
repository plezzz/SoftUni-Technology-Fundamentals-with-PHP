<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 10/03/2019
 * Time: 11:41
 */

$firstEmployee=intval(readline());
$secondEmployee=intval(readline());
$thirdEmployee=intval(readline());
$answers=intval(readline());

$totalAnswerPerHour=$firstEmployee+$secondEmployee+$thirdEmployee;
$totalTime = 0;

while ($answers > 0)
{
    $totalTime++;
    $answers -= $totalAnswerPerHour;
    if ($totalTime % 4 == 0)
    {
        $totalTime++;
    }
}

echo "Time needed: ".$totalTime."h.";
