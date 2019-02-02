<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 28/01/2019
 * Time: 15:22
 */

$budget=readline();
$spent=0;
while (true) {
    $input = readline();
    if ($input=="Game Time"){
        printf("Total spent: $%.2f. Remaining: $%.2f",$spent,$budget);
        break;
    }
    switch ($input) {
        case "OutFall 4":
            {
                if ($budget >= 39.99) {
                    $spent += 39.99;
                    $budget -= 39.99;
                    echo "Bought OutFall 4" . PHP_EOL;
                    break;
                } else {
                    echo "Too Expensive".PHP_EOL;
                    break;
                }
            }
        case "CS: OG":
            {
                if ($budget >= 15.99) {
                    $spent += 15.99;
                    $budget -= 15.99;
                    echo "Bought CS: OG" . PHP_EOL;
                    break;
                } else {
                    echo "Too Expensive".PHP_EOL;
                    break;
                }
            }
        case "Zplinter Zell":
            {
                if ($budget >= 19.99) {
                    $spent += 19.99;
                    $budget -= 19.99;
                    echo "Bought Zplinter Zell" . PHP_EOL;
                    break;
                } else {
                    echo "Too Expensive".PHP_EOL;
                    break;
                }
            }
        case "Honored 2":
            {
                if ($budget >= 59.99) {
                    $spent += 59.99;
                    $budget -= 59.99;
                    echo "Bought Honored 2" . PHP_EOL;
                    break;
                } else {
                    echo "Too Expensive".PHP_EOL;
                    break;
                }
            }
        case "RoverWatch":
            {
                if ($budget >= 29.99) {
                    $spent += 29.99;
                    $budget -= 29.99;
                    echo "Bought RoverWatch" . PHP_EOL;
                    break;
                } else {
                    echo "Too Expensive".PHP_EOL;
                    break;
                }
            }
        case "RoverWatch Origins Edition":
            {
                if ($budget >= 39.99) {
                    $spent += 39.99;
                    $budget -= 39.99;
                    echo "Bought RoverWatch Origins Edition" . PHP_EOL;
                    break;
                } else {
                    echo "Too Expensive".PHP_EOL;
                    break;
                }
            }
        default:{
            echo "Not Found".PHP_EOL;
            break;
        }


    }
    if ($budget == 0) {
        echo "Out of money!";
        break;
    }
}

