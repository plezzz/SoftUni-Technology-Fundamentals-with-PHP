<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 16:00
 */

$arr = array_map("intval", explode(" ", readline()));
while (true) {
    $command = readline();
    if ($command == "end") {
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
                $index = array_search($token[1], $arr);
                unset($arr[$index]);
            }
            break;
        case "RemoveAt":
            {
                array_splice($arr, $token[1], 1);
            }
            break;
        case "Insert":
            {
                $numberToInsert = $token[1];
                $indexToInsert = $token[2];
                $firstPart = array_splice($arr, 0, $indexToInsert);
                $addElement = array($numberToInsert);
                $secondPart = array_splice($arr, $indexToInsert);
                $arr = array_merge($firstPart, $addElement, $secondPart);
            }
            break;
        case "Contains":
            {
                if (in_array($token[1], $arr))
                    echo "Yes" . PHP_EOL;
                else
                    echo "No such number" . PHP_EOL;
            }
            break;
        case "Print":
            {
                $tempArr = [];
                for ($i = 0; $i < count($arr); $i++) {
                    if ($token[1] == "even") {
                        if ($arr[$i] % 2 == 0) {
                            $tempArr[] = $arr[$i];
                        }
                    } else {
                        if ($arr[$i] % 2 != 0)
                            $tempArr[] = $arr[$i];
                    }
                }
                echo implode(" ", $tempArr) . PHP_EOL;
            }
            break;
        case "Get":
            {
                $sum = 0;
                foreach ($arr as $value) {
                    $sum += $value;
                }
                echo $sum . PHP_EOL;
            }
            break;
        case "Filter":
            {
                array_filter($arr, function ($e) use ($token) {
                    if ($token[1] == ">=") {
                        if ($e >= $token[2]) {
                            echo $e . " ";
                        }

                    } elseif ($token[1] == "<") {
                        if ($e < $token[2]) {
                            echo $e . " ";
                        }
                    } elseif ($token[1] == ">") {
                        if ($e > $token[2]) {
                            echo $e . " ";
                        }
                    } elseif ($token[1] == "<=") {
                        if ($e <= $token[2]) {
                            echo $e . " ";
                        }
                    }
                });
                echo "\n";
            }
            break;
    }
}
echo implode(" ", $arr);