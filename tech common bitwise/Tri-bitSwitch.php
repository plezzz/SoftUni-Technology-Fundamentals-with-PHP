<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/03/2019
 * Time: 00:09
 */

$number = readline();
$position = readline();

$mask = 7;
$mask = $mask << $position;

echo $number ^ $mask;