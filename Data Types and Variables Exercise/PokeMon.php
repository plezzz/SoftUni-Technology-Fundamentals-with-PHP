<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/02/2019
 * Time: 15:29
 */

$pokePowerN = readline();
$pokeTargetsM = readline();
$exhaustionFactorY = readline();
$pokePowerN50 = intval($pokePowerN * 0.5);
$count = 0;
while ($pokePowerN >= $pokeTargetsM) {
    $pokePowerN -= $pokeTargetsM;
    $count++;
    if ($pokePowerN == $pokePowerN50) {

        if ($exhaustionFactorY > 0) {
            $pokePowerN /= $exhaustionFactorY;
        }
    }
}
$result = intval($pokePowerN);
echo $result . PHP_EOL;
echo $count . PHP_EOL;
