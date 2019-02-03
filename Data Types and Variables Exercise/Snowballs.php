<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/02/2019
 * Time: 00:11
 */
$snowballs = readline();
$best=0;
$bestSnowballSnow = 0;
$bestSnowballTime = 0;
$bestSnowballQuality = 0;

for ($i = 1; $i <= $snowballs; $i++) {
    $snowballSnow = readline();
    $snowballTime = readline();
    $snowballQuality = readline();
    $fff=$snowballSnow / $snowballTime;
    $snowballValue =bcpow($fff,$snowballQuality);
    $best=max($snowballValue,$best);
    if ($best==$snowballValue) {
        $bestSnowballSnow = $snowballSnow;
        $bestSnowballTime = $snowballTime;
        $bestSnowballQuality = $snowballQuality;
    }
}
printf("%d : %d = %s (%d)",$bestSnowballSnow,$bestSnowballTime,$best,$bestSnowballQuality);
