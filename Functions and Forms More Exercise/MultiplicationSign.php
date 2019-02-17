<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 13:22
 */
for ($i = 1; $i <= 3; $i++) {
    $numbers[] = readline();
}
$result = multiplication($numbers[0], $numbers[1], $numbers[2]);

if ($result > 0)
    echo "positive";
elseif ($result < 0)
    echo "negative";
else
    echo "zero";

function multiplication($numOne, $numTwo, $numThree)
{
    $result = $numOne * $numTwo * $numThree;
    return $result;
}