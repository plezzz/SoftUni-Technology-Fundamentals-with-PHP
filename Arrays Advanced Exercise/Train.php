<?php
/**
 * Created by PhpStorm.
 * User: niki
 * Date: 2/20/19
 * Time: 12:55 PM
 */

$listOfWagon = array_map("intval", explode(" ", readline()));
$capacity = readline();
while (($passanger = readline()) != "end") {
    $passanger = explode(" ", $passanger);
    if ($passanger[0] == "Add")
        $listOfWagon[] = $passanger[1];
    else {
        for ($i = 0; $i < count($listOfWagon); $i++) {
            if ($listOfWagon[$i] + $passanger[0] <= $capacity) {
                $listOfWagon[$i] += $passanger[0];
                break;
            }
        }
    }
}
echo implode(" ", $listOfWagon);

