<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 24/02/2019
 * Time: 17:03
 */
$arr = [];
while (true) {
    $command = readline();
    if ($command == "Print") {
        break;
    }
    $token = explode(" ", $command);
    switch ($token[0]) {
        case "Push":
            {
               array_unshift($arr,$token[1]);
            }
            break;
        case "Add":
            {
                array_push($arr,$token[1]);
            }
            break;
        case "Pop":
            {
                array_shift($arr);
            }
            break;
        case "Enqueue":
            {
                array_pop($arr);
            }
            break;
    }
}
echo implode(" ", $arr);