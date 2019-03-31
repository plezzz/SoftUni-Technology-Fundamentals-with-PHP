<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 17:37
 */

$input=readline();
$str=str_split($input);
$output=[];
for($i=0;$i<count($str)-1;$i++){
    if ($str[$i] != $str[$i+1])
        $output[]=$str[$i];

    if (count($str)-2==$i)
        $output[]=$str[$i+1];
}
echo implode("",$output);