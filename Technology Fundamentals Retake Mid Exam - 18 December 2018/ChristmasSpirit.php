<?php
$quantity = readline();
$days=readline();
$spirit=0;
$budget=0;
$ornament = 2;
$skirt = 5;
$garlands = 3;
$lights = 15;
foreach (range(1, $days) as $day) {
    if ($day % 11 == 0)
    {
        $quantity += 2;
    }
    if ($day%2==0){
        $budget+=$ornament*$quantity;
        $spirit+=5;
    }
    if ($day%3==0){
        $budget+=$skirt*$quantity;
        $budget+=$garlands*$quantity;
        $spirit+=13;
    }
    if ($day%5==0){
        $budget+=$lights*$quantity;
        $spirit+=17;
        if ($day%3==0){
            $spirit+=30;
        }
    }
    if ($day%10==0){
        $spirit-=20;
        $budget+=$skirt+$garlands+$lights;
        if ($day == 10 && $days % 10 == 0){
            $spirit-=30;
        }
    }
}
echo "Total cost: " . $budget . PHP_EOL;
echo "Total spirit: " . $spirit;