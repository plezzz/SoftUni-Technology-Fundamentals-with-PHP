<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 21:15
 */

$health = 100;
$coin = 0;
$rooms = explode("|", readline());
for ($i = 0; $i < count($rooms); $i++) {
    $room = explode(" ", $rooms[$i]);
    $type = $room[0];
    $power = $room[1];
    $monster = $room[0];
    if ($type == "potion") {
        $type = "potion";
    } elseif ($type == "chest") {
        $type = "chest";
    } else {
        $type = "monster";
    }
    switch ($type) {
        case "monster":
            $health -= $power;
            if ($health > 0) {
                echo "You slayed $monster." . PHP_EOL;
            } else {
                echo "You died! Killed by $monster." . PHP_EOL;
                $bestRoom = $i + 1;
                echo "Best room: $bestRoom";
                exit();
            }
            break;
        case "chest":
            $coin += $power;
            echo "You found $power coins." . PHP_EOL;
            break;
        case "potion":
            $potion = $power;
            $health = $health + $potion;
            if ($health > 100) {
                $potion -= $health - 100;
                $health = 100;
            }
            echo "You healed for $potion hp." . PHP_EOL;
            echo "Current health: $health hp." . PHP_EOL;
            break;
    }
}
echo "You've made it!"."\nCoins: $coin"."\nHealth: $health";