<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 00:22
 */

$lostGames = intval(readline());
$priceOfHeadset = doubleval(readline());
$priceOfMouse = doubleval(readline());
$priceOfKeyboard = doubleval(readline());
$priceOfDisplay = doubleval(readline());

$brokeHeadset = 0;
$brokeMouse = 0;
$brokeKeyboard = 0;
$brokeDisplay = 0;

for ($i = 1; $i <= $lostGames; $i++) {
    if ($i % 2 == 0) {
        $brokeHeadset++;
    }
    if ($i % 3 == 0) {
        $brokeMouse++;
    }
    if ($i % 2 == 0 && $i % 3 == 0){
        $brokeKeyboard++;
    }
    if ($i % 4 == 0 && $i % 6 == 0){
        $brokeDisplay++;
    }
}
$totalPriceHeadset=$priceOfHeadset*$brokeHeadset;
$totalPriceMouse=$priceOfMouse*$brokeMouse;
$totalPriceKeyboard=$priceOfKeyboard*$brokeKeyboard;
$totalPriceDisplay=$priceOfDisplay*$brokeDisplay;
$totalPrice=$totalPriceHeadset+$totalPriceMouse+$totalPriceKeyboard+$totalPriceDisplay;
printf("Rage expenses: %.2f lv.",$totalPrice);