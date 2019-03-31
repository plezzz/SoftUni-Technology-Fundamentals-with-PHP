<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 19:34
 */

$re = '/(?<string>.*?)(?<multiplier>\d+)/m';
$str = readline();
preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

$output='';
foreach ($matches as $match) {
    $output.= str_repeat(strtoupper($match["string"]), $match["multiplier"]);
}
$count=count(array_unique(str_split($output)));

echo "Unique symbols used: " . $count . PHP_EOL;
echo $output;