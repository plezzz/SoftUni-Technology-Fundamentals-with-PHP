<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 05:44
 */

$input = array_map("trim",explode(",", readline()));
$cities = [];
foreach ($input as $key => $value) {
    if ($key % 2 == 0) {
        if (key_exists($value,$cities))
            $cities[$value] += $input[$key+1];
        else
            $cities[$value] = $input[$key+1];
    }
}

foreach ($cities as $city=>$incomes){
    echo "$city => $incomes\n";
}