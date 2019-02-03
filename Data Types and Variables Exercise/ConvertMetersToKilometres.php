<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 23:31
 */
$meter=intval(readline());
$kilometer=$meter/1000;
$kilometer=round($kilometer,2);
printf("%.2f",$kilometer);
