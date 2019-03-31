<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 18:51
 */

$input = explode(" ", readline());
$input=array_values(array_filter($input));
$total = 0;
for ($i = 0; $i < count($input); $i++) {
    $token = $input[$i];
    $firstLetter = substr($token, 0, 1);
    $secondLetter = substr($token, strlen($token) - 1, 1);
    $number = substr($token, 1, strlen($token) - 2);
    $positionF = ord(strtoupper($firstLetter)) - ord('A') + 1;
    $positionS = ord(strtoupper($secondLetter)) - ord('A') + 1;
    if (ctype_upper($firstLetter)) {
        $result=($number/$positionF);
    }else{
        $result=($number*$positionF);
    }
    if (ctype_upper($secondLetter)) {
        $result=($result-$positionS);
    }else{
        $result=($result+$positionS);
    }
    $total+=$result;
}
printf("%.2f",$total);