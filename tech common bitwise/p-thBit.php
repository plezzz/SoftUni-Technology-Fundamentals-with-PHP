<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/03/2019
 * Time: 23:58
 */

$number = readline();
$position = readline();
$number = $number >> $position;
echo $number & 1;