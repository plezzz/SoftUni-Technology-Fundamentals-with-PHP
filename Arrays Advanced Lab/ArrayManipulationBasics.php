<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 15:45
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
    }
}
echo implode(" ", $arr);