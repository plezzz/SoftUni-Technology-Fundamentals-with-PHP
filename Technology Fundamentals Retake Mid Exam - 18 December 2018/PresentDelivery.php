<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 18:29
 */

$houses = explode("@", readline());
$count = count($houses);
$jump = 0;
while (true) {
    $lastJump = $jump;
    $input = readline();
    if ($input == "Merry Xmas!" || $input == "end")
        break;
    $jump = explode(" ", $input);
    $newJump = $jump[1];
    $jump = $newJump + $lastJump;
    if ($jump >= $count) {
        $jump = $jump % $count;
    }
    if ($houses[$jump] == 0) {
        echo "House $jump will have a Merry Christmas." . PHP_EOL;
    } else {
        $houses[$jump] -= 2;
    }
}
echo "Santa's last position was $lastJump.".PHP_EOL;
$countHouses = 0;
$present=true;
foreach ($houses as $value) {
    if ($value != 0) {
        $present = false;
        $countHouses++;
    }
}
if ($present) {
    echo "Mission was successful.".PHP_EOL;
} else {
    echo "Santa has failed $countHouses houses.".PHP_EOL;
}