<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/03/2019
 * Time: 00:05
 */

$numbers = explode(" ", readline());

$result = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $result = $result ^ $numbers[$i];
}
echo $result;