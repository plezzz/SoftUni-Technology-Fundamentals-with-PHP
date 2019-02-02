<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 16:56
 */
$cycle =readline();
$string="";
for ($i=1;$i<=$cycle;$i++){

    $number = readline();
    $numberOfDigits = strlen($number);
    $mainDigit = substr($number, $numberOfDigits - 1);
    $offset = ($mainDigit - 2) * 3;
    if ($mainDigit == 8 || $mainDigit == 9) {
        $letterIndex = $offset + $numberOfDigits;
    }elseif ($mainDigit == 0){
        $letterIndex = -65;
    }else{
        $letterIndex = $offset + $numberOfDigits - 1;
    }
    $str = chr(97 + $letterIndex);
    $string.=$str;
}
echo $string;