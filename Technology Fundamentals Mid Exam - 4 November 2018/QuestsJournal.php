<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 22:31
 */
$journal = explode(", ", readline());

while (true) {
    $input = readline();
    if ($input == "Retire!") {
        break;
    }
    $commands = explode(" - ", $input);
    switch ($commands[0]) {
        case "Start":
            if (in_array($commands[1], $journal) === false) {
                $journal[] = $commands[1];
            }
            break;
        case "Complete":
            if (in_array($commands[1], $journal)) {
                $key = array_search($commands[1], $journal);
                array_splice($journal, $key, 1);
            }
            break;
        case "Side Quest":
            $temp = explode(":", $commands[1]);
            $quest = $temp[0];
            $sideQuest = $temp[1];
            if (in_array($quest, $journal)) {
                if (in_array($sideQuest, $journal) === false) {
                    $key = array_search($quest, $journal);
                    array_splice($journal, $key + 1, 0, $sideQuest);
                }
            }
            break;
        case "Renew":
            if (in_array($commands[1], $journal)) {
                $key = array_search($commands[1], $journal);
                $journal[] = $journal[$key];
                array_splice($journal, $key, 1);
            }
            break;
    }
}
echo implode(", ",$journal);