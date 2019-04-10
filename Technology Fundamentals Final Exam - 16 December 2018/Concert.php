<?php

$bands = [];
$times = [];
while (true) {
    $input = readline();
    if ($input == "start of concert")
        break;
    list($command, $band, $args) = explode("; ", $input);

    switch ($command) {
        case "Add":
            $members = explode(", ", $args);
            if (!key_exists($band, $bands)) {
                $bands[$band] = $members;
            } else {
                foreach ($members as $member) {
                    if (array_search($member, $bands[$band]) === false) {
                        $bands[$band][] = $member;
                    }
                }
            }
            break;
        case "Play":
            if (!key_exists($band, $times))
                $times[$band] = $args;
            else
                $times[$band] += $args;
            break;
    }
}
ksort($times);
arsort($times);
echo "Total time: " . array_sum($times) . PHP_EOL;
foreach ($times as $band => $time) {
    echo $band . " -> " . $time . PHP_EOL;
}
$requestBand = readline();
echo $requestBand . PHP_EOL;
foreach ($bands[$requestBand] as $member) {
    echo "=> $member\n";
}