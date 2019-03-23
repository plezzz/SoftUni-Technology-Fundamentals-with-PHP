<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 12:01
 */

$banned=explode(", ",readline());
$text=readline();

for($i=0;$i<count($banned);$i++){
$ban=$banned[$i];
    $stars = str_repeat("*", strlen($ban));
    $text = str_replace($ban, $stars, $text);
}
echo $text;