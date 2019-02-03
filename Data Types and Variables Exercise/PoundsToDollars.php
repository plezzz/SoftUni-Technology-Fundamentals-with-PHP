<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 23:41
 */
$pounds=floatval(readline());
$dollars=$pounds*1.31;
$dollars=round($dollars,3);
printf("%.3f",$dollars);