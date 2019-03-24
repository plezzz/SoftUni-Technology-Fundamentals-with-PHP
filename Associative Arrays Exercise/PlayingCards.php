<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 08:27
 */

$players = [];
while (true) {
    $input = readline();
    if ($input == "JOKER")
        break;
    list($name, $cards) = explode(": ", $input);
    if (!key_exists($name, $players))
        $players[$name] = [];
    $playerCards = array_map("trim", explode(",", $cards));
    for ($i = 0; $i < count($playerCards); $i++) {
        if (!in_array($playerCards[$i], $players[$name])) {
            $players[$name][] = $playerCards[$i];
        }
    }
}
foreach ($players as $name => $cards) {
    $result = 0;
    for ($i = 0; $i < count($cards); $i++) {
        if ($cards[$i] === "10S" || $cards[$i] === "10H" || $cards[$i] === "10D" || $cards[$i] === "10C")
            list($power, $type) = str_split($cards[$i], 2);
        else
            list($power, $type) = str_split($cards[$i]);
        switch ($type) {
            case "S":
                $multiplierB = 4;
                break;
            case "H":
                $multiplierB = 3;
                break;
            case "D":
                $multiplierB = 2;
                break;
            case "C":
                $multiplierB = 1;
                break;
        }
        switch ($power) {
            case "J":
                $multiplierA = 11;
                break;
            case "Q":
                $multiplierA = 12;
                break;
            case "K":
                $multiplierA = 13;
                break;
            case "A":
                $multiplierA = 14;
                break;
            default:
                $multiplierA = $power;
                break;
        }
        $result += $multiplierA * $multiplierB;
    }
    echo $name, ": " . $result . PHP_EOL;
}