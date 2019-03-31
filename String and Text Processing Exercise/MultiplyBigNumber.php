<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 16:05
 */


$number = readline();
$mul = readline();
if ($mul==0){
    echo 0;
    exit();
}
echo mul($number, $mul);

function mul($n, $m)
{

    $nA = array_reverse(str_split($n));
    $reminder = 0;
    for ($i = 0; $i < count($nA); $i++) {

        $result = $nA[$i] * $m;
        $result += $reminder;
        $reminder = 0;
        if ($result <= 9) {
            $nA[$i] = $result;
        } else {
            $result = str_split($result);
            $nA[$i] = $result[1];
            $reminder = $result[0];
            if (count($nA) - 1 == $i) {
                $nA[] = $result[1];
            }
        }
    }
    $value = implode("", $nA);
    return strrev($value);
}