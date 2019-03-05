<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/03/2019
 * Time: 10:07
 */

$budget =readline();
$students =readline();
$priceOfFlour=readline();
$priceOfEgg =readline();
$priceOfApron =readline();

/*
 *
 * apronPrice * (students + 20%) + eggPrice * 10 * (students) + flourPrice * (students - freePackages)
10 * (3) + 0.10 * 10 * (2) + 1 * (2) = 34.00

 *
 *
 */
$freeFlour = floor($students / 5);
$apron = ceil($students * 1.20);
$moneyForApron=$priceOfApron*$apron;
$moneyForEgg=$priceOfEgg * ($students*10);
$moneyForFlour=$priceOfFlour * ($students-$freeFlour);
$totalMoney=$moneyForApron+$moneyForEgg+$moneyForFlour;

if ($totalMoney<=$budget){
printf("Items purchased for %.2f$.",$totalMoney);
}else{
    $needMoney=$totalMoney-$budget;
    printf("%.2f$ more needed.",$needMoney);
}