<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 11/02/2019
 * Time: 13:56
 */
$arrayOne = explode(" ", readline());
$roll = readline();
for ($i = 0; $i < $roll; $i++) {
    $arrayOne[] = $arrayOne[$i];
    unset($arrayOne[$i]);
}
echo implode(" ", $arrayOne);