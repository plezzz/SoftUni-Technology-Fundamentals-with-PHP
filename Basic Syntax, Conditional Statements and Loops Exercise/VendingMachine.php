<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/01/2019
 * Time: 20:52
 */
$money = 0;
$breakall=0;
while (true) {
    $input = readline();
    if ($input == "Start") {
        while (true) {
            $product = readline();
            switch ($product) {
                case "Nuts":
                    {
                        if ($money >= 2.00) {
                            $money -= 2.0;
                            echo "Purchased nuts".PHP_EOL;
                        } else {
                            echo "Sorry, not enough money".PHP_EOL;
                        }
                        break;
                    }
                case "Water":
                    {
                        if ($money >= 0.7) {
                            $money -= 0.7;
                            echo "Purchased water".PHP_EOL;
                        } else {
                            echo "Sorry, not enough money".PHP_EOL;
                        }
                        break;
                    }
                case "Crisps":
                    {
                        if ($money >= 1.5) {
                            $money -= 1.5;
                            echo "Purchased crisps".PHP_EOL;
                        } else {
                            echo "Sorry, not enough money".PHP_EOL;
                        }
                        break;
                    }
                case "Soda":
                    {
                        if ($money >= 0.78) {
                            $money -= 0.80;
                            echo "Purchased soda".PHP_EOL;
                        } else {
                            echo "Sorry, not enough money".PHP_EOL;
                        }
                        break;
                    }
                case "Coke":
                {
                    if ($money >= 1.00) {
                        $money -= 1.0;
                        echo "Purchased coke".PHP_EOL;
                    } else {
                        echo "Sorry, not enough money".PHP_EOL;
                    }
                    break;
                }
                case "End":
                    {
                        $breakall=1;
                        break;
                    }
                default:
                    {
                        echo "Invalid product".PHP_EOL;
                        break;
                    }
            }
            if ($breakall==1){
                break;
            }
        }
    } elseif ($input == 0.1 || $input == 0.2 || $input == 0.5 || $input == 1 || $input == 2) {
        $money += $input;
    } else {
        echo "Cannot accept $input".PHP_EOL;
    }
    if ($breakall==1){
        break;
    }
}
$moneyLeft=round($money);
printf("Change: %.2f",$moneyLeft) ;