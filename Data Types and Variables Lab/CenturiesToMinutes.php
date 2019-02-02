<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 19:46
 */
$centuries =readline();
$years=$centuries*100;
$days =intval($years*365.2422);
$hours =$days*24;
$minutes=$hours*60;
printf("%d centuries = %d years = %d days = %d hours = %d minutes",$centuries,$years,$days,$hours,$minutes);