<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 10/03/2019
 * Time: 14:07
 */

$days = readline();
$players = readline();
$energyGroup = readline();
$waterPerDay = readline();
$foodPerDay = readline();
$counter = 1;
$totalWater = $days * $players * $waterPerDay;
$totalFood = $days * $players * $foodPerDay;
while ($counter <= $days) {

    $energyGroup -= readline();
    if ($energyGroup<1){
        printf("You will run out of energy. You will be left with %.2f food and %.2f water.",$totalFood,$totalWater);
        exit();
    }
    if ($counter % 2 == 0) {
        $energyGroup+=$energyGroup*0.05;
        $totalWater-=$totalWater*0.30;
    }
    if ($counter % 3 == 0) {
        $energyGroup+=$energyGroup*0.10;
        $totalFood-=$totalFood/$players;
    }
    $counter++;
}
printf( "You are ready for the quest. You will be left with - %.2f energy!",$energyGroup);