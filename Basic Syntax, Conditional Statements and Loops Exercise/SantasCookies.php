<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 08:09
 */
$batch=intval(readline());
$singleCookieGrams=25;
$smallSpoon=10;
$bigSpoon=20;
$cups=140;
$cookiePerBox=5;
$totalBox=0;
for ($i=1;$i<=$batch;$i++){
    $amountOfFlour=intval(readline());
    $amountOfSugar=intval(readline());
    $amountOfCocoa=intval(readline());
    $flourCups=intval($amountOfFlour/$cups);
    $sugarSpoons=intval($amountOfSugar/$bigSpoon);
    $cocoaSpoons=intval($amountOfCocoa/$smallSpoon);
    if ($flourCups<=0 ||$sugarSpoons<=0|| $cocoaSpoons<=0){
        echo "Ingredients are not enough for a box of cookies.".PHP_EOL;
    }else{
        $takeMin=min($flourCups,$sugarSpoons,$cocoaSpoons);
        $min=$takeMin/25;
        $bake=($cups + $smallSpoon + $bigSpoon)*$min;
        $box=floor($bake/$cookiePerBox);
        echo "Boxes of cookies: $box".PHP_EOL;
        $totalBox+=$box;
    }
}
echo "Total boxes: $totalBox";