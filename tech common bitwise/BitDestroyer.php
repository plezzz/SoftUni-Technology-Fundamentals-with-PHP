<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/03/2019
 * Time: 00:00
 */
$number = readline();
$position = readline();
$mask = 1 << $position;
$mask = ~$mask;
echo $number & $mask;