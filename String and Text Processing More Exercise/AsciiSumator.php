<?php

$charOne=readline();
$charTwo=readline();
$string=readline();

$max=MAX(ord($charOne),ord($charTwo));
$min=MIN(ord($charOne),ord($charTwo));
$sum=0;
for($i=0;$i<strlen($string);$i++){
$char=ord($string[$i]);
    if ($char<$max&&$char>$min)
        $sum+=$char;
}
echo $sum;