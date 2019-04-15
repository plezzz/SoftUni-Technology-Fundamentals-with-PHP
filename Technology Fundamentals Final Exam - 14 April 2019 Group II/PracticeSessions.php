<?php

$roads = [];

while (true) {
    $input = readline();
    if ($input == "END")
        break;

    $commands = explode("->", $input);

    switch ($commands[0]) {
        case "Add":
            $road = $commands[1];
            $racer = $commands[2];
            if (!key_exists($road, $roads))
                $roads[$road][] = $racer;
            else
                $roads[$road][] = $racer;
            break;
        case "Move":
            $currentRoad = $commands[1];
            $racer = $commands[2];
            $nextRoad = $commands[3];
            $inArray = array_search($racer, $roads[$currentRoad]);
            if ($inArray !== false) {
                $roads[$nextRoad][] = $racer;
                array_splice($roads[$currentRoad], $inArray, 1);
            }
            break;
        case "Close":
            $road = $commands[1];
            unset($roads[$road]);
            break;
    }
}

uksort($roads, function ($roadOne, $roadTwo) use ($roads) {
    $countOne = count($roads[$roadOne]);
    $countTwo = count($roads[$roadTwo]);
    if ($countOne == $countTwo) {
        return $roadOne <=> $roadTwo;
    }
    return $countTwo <=> $countOne;
});

echo "Practice sessions:\n";
foreach ($roads as $road => $racers){
    echo $road.PHP_EOL;
    foreach ($racers as $racer){
        echo "++$racer\n";
    }
}