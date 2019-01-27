<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 13:41
 */

$hour = readline();
$minute = readline();

$selectedTime = "$hour:$minute:00";
echo date('G:i',strtotime($selectedTime . ' +30 minutes'));