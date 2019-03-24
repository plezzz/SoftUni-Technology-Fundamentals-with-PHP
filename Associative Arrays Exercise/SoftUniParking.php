<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 09:50
 */

$rotation = readline();
$parking = [];
for ($i = 1; $i <= $rotation; $i++) {
    list($command, $name, $plate) = array_pad(explode(" ", readline()), 3, null);
    switch ($command) {
        case "register":
            if (!key_exists($name, $parking)) {
                $parking[$name] = $plate;
                echo "$name registered $plate successfully\n";
            } else
                echo "ERROR: already registered with plate number $parking[$name]\n";
            break;
        case "unregister":
            if (key_exists($name, $parking)) {
                echo "$name unregistered successfully\n";
                unset($parking[$name]);
            } else
                echo "ERROR: user $name not found\n";
            break;
        default:
            break;
    }
}
foreach ($parking as $name=>$plate){
    echo  "$name => $plate\n";
}