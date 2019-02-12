<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 09/02/2019
 * Time: 20:04
 */
$arrayOne = explode(" ", readline());
$sumOne = [];
$sumTwo = [];

if (count($arrayOne) == 1) {
    echo implode("",$arrayOne);
    exit();
}
while (true) {
    $sumOne = [];
    for ($i = 0; $i < count($arrayOne) - 1; $i++) {
        $sumOne[] = $arrayOne[$i] + $arrayOne[$i + 1];
    }
    //print_r($sumOne);
        $arrayOne = [];
    for ($i = 0; $i < count($sumOne) - 1; $i++) {
        $arrayOne[] = $sumOne[$i] + $sumOne[$i + 1];
    }
  //  print_r($arrayOne);
    if (count($arrayOne) == 1) {
        echo implode("",$arrayOne);
        exit();
    }
    if (count($sumOne) == 1){
        echo implode("",$sumOne);
        exit();
    }
}
