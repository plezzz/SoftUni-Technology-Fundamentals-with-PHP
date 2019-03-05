<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 11:14
 */

$dateAsString=readline();
$date= new DateTime($dateAsString);
echo $date->format('l').PHP_EOL;
