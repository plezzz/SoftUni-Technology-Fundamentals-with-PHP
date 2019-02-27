<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 18:48
 */

$arr = array_map("intval", explode(" ", readline()));
while (true) {
    $command = readline();
    if ($command == "End") {
        break;
    }
    $token = explode(" ", $command);
    switch ($token[0]) {
        case "Add":
            {
                $arr[] = $token[1];
            }
            break;
        case "Remove":
            {
                if ($token[1] < 0 || $token[1] > count($arr)) {
                    echo "Invalid index" . PHP_EOL;
                } else
                    array_splice($arr, $token[1], 1);
            }
            break;
        case "Insert":
            {
                if ($token[2] < 0 || $token[2] > count($arr)) {
                    echo "Invalid index" . PHP_EOL;
                } else {
                    array_splice($arr, $token[2], 0, $token[1]);
                }
            }
            break;
        case "Shift":
            {
                if ($token[1] == "left") {
                    for ($i = 0; $i < $token[2]; $i++) {
                        $first = array_shift($arr);
                        $arr[] = $first;
                    }
                } elseif ($token[1] == "right") {
                    for ($i = 0; $i < $token[2]; $i++) {
                        $last = array_pop($arr);
                        $first = array_unshift($arr, $last);
                    }
                }
            }
            break;
    }
}
echo implode(" ", $arr);