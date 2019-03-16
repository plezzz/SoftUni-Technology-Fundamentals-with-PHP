<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 10/03/2019
 * Time: 14:16
 */

$input = explode("#", readline());
$water = readline();
$effort = 0;
$totalFire = 0;
echo "Cells:\n";
for ($i = 0; $i < count($input); $i++) {
    list($type, $cell) = explode(" = ", $input[$i]);
    switch ($type) {
        case "High":
            if ($cell >= 81 && $cell <= 125) {
                if ($water >= $cell) {
                    $effort += $cell * 0.25;
                    $totalFire += $cell;
                    $water -=$cell;
                    echo " - $cell\n";
                }
            }
            break;
        case "Medium":
            if ($cell >= 51 && $cell <= 80) {
                if ($water >= $cell) {
                    $effort += $cell * 0.25;
                    $totalFire += $cell;
                    $water -=$cell;
                    echo " - $cell\n";
                }
            }
            break;
        case "Low":
            if ($cell >= 1 && $cell <= 50) {
                if ($water >= $cell) {
                    $effort += $cell * 0.25;
                    $totalFire += $cell;
                    $water -=$cell;
                    echo " - $cell\n";
                }
            }
            break;
    }
}
printf("Effort: %.2f\n",$effort);
printf("Total Fire: %d",$totalFire);
