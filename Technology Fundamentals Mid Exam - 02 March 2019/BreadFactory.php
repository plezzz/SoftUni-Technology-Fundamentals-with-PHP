<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/03/2019
 * Time: 10:09
 */

$energy = 100;
$coins = 100;

$events = explode("|", readline());
for ($i = 0; $i < count($events); $i++) {
    $event = explode("-", $events[$i]);
    $type = $event[0];
    $power =(int) $event[1];

    switch ($type) {
        case "rest":
            $rest = $power;
            $energy = $energy + $rest;
            if ($energy > 100) {
                $rest -= $energy - 100;
                $energy = 100;
            }
            echo "You gained $rest energy." . PHP_EOL;
            echo "Current energy: $energy." . PHP_EOL;
            break;
        case "order":
            if ($energy >= 30) {
                $energy -= 30;
                $coins += $power;
                echo "You earned $power coins." . PHP_EOL;
            } else {
                $energy += 50;
                echo "You had to rest!" . PHP_EOL;
            }
            break;
        default:
            $coins -= $power;
            if ($coins > 0) {
                echo "You bought $type." . PHP_EOL;
            } else {
                echo "Closed! Cannot afford $type.";
                exit();
            }
            break;
    }
}
echo "Day completed!\nCoins: $coins\nEnergy: $energy";