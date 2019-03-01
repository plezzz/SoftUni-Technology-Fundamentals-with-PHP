<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 17:42
 */

$kids = explode("&", readline());

while (true) {
    $input = readline();
    if ($input == "Finished!")
        break;
    $args = explode(" ", $input);
    $kidName = $args[1];
    switch ($args[0]) {
        case "Bad":
            if (in_array($kidName, $kids) === false) {
                array_unshift($kids, $kidName);
            }
            break;
        case "Good":
            if (in_array($kidName, $kids)) {
                $key = array_search($kidName, $kids);
                array_splice($kids, $key, 1);
            }
            break;
        case "Rename":
            if (in_array($kidName, $kids)) {
                $newName = $args[2];
                $key = array_search($kidName, $kids);
                array_splice($kids, $key, 1, $newName);
            }
            break;
        case "Rearrange":
            if (in_array($kidName, $kids)) {
                $key = array_search($kidName, $kids);
                $kid = array_splice($kids, $key, 1);
                array_push($kids, $kid[0]);
            }
            break;
    }
}
echo implode(", ", $kids);