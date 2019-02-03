<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/02/2019
 * Time: 19:16
 */
$a=readline();
$b=readline();
printf("Before:\na = %d\nb = %d\n", $a, $b);
$temporary=$a;
$a=$b;
$b=$temporary;
printf("After:\na = %d\nb = %d\n", $a, $b);