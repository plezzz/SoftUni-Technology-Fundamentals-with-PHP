<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 22:20
 */

//$dul = $sh = $V = 0;
echo "Length: ";
$length = floatval(readline());
echo "Width: ";
$width = floatval(readline());
echo "Height: ";
$height = floatval(readline());
$volume = ($length * $width * $height) / 3;
echo sprintf("Pyramid Volume: %.2f", $volume) . PHP_EOL;
