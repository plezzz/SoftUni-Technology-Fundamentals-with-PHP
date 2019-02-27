<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 21/02/2019
 * Time: 20:13
 */



$input = array_map("intval", explode(" ", readline()));

$sumOfAllRemoved = 0;
while (count($input) > 0)
{
    $index = readline();
    $currentValue = 0;

    if ($index < 0)
    {
        $currentValue = $input[0];
        $sumOfAllRemoved += $currentValue;
        $input[0] = $input[count($input) - 1];
    }
    else if ($index > count($input) - 1)
    {
        $currentValue = $input[count($input) - 1];
        $sumOfAllRemoved += $currentValue;
        $input[count($input) - 1] = $input[0];
    }
    else
    {
        $currentValue = $input[$index];
        $sumOfAllRemoved += $currentValue;
        array_splice($input,$index,1);
    }

    for ($cycle = 0; $cycle < count($input); $cycle++)
    {
        if ($input[$cycle] <= $currentValue)
        {
            $input[$cycle] += $currentValue;
        }
        else
        {
            $input[$cycle] -= $currentValue;
        }
    }
}
echo $sumOfAllRemoved;