<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/01/2019
 * Time: 15:41
 */

$numberOfPeople = intval(readline());
$typeOfGroup = strval(readline());
$timeOfWeek = strval(readline());
switch ($typeOfGroup) {
    case "Students":
        {
            switch ($timeOfWeek) {
                case "Friday":
                    {
                        $price = 8.45 * $numberOfPeople;
                        break;
                    }
                case "Saturday":
                    {
                        $price = 9.80 * $numberOfPeople;
                        break;
                    }
                case "Sunday":
                    {
                        $price = 10.46 * $numberOfPeople;
                        break;
                    }
                default:
                    {
                        break;
                    }
            }
            break;
        }
    case "Business":
        {
            switch ($timeOfWeek) {
                case "Friday":
                    {
                        $price = 10.90 * $numberOfPeople;
                        break;
                    }
                case "Saturday":
                    {
                        $price = 15.60 * $numberOfPeople;
                        break;
                    }
                case "Sunday":
                    {
                        $price = 16.00 * $numberOfPeople;
                        break;
                    }
                default:
                    {
                        break;
                    }
            }
            break;
        }
    case "Regular":
        {
            switch ($timeOfWeek) {
                case "Friday":
                    {
                        $price = 15.00 * $numberOfPeople;
                        break;
                    }
                case "Saturday":
                    {
                        $price = 20.00 * $numberOfPeople;
                        break;
                    }
                case "Sunday":
                    {
                        $price = 22.50 * $numberOfPeople;
                        break;
                    }
                default:
                    {
                        break;
                    }
            }
            break;
        }
    default:
        {
            break;
        }
}
$discount=0;
if ($typeOfGroup == "Students" && $numberOfPeople >= 30) {
    $discount = $price * 0.15;
} elseif ($typeOfGroup == "Business" && $numberOfPeople >= 100) {
    $discount = ($price / $numberOfPeople) * 10;
} elseif ($typeOfGroup == "Regular" && ($numberOfPeople >= 10 && $numberOfPeople <= 20)) {
    $discount = $price * 0.05;
}
$totalPrice=$price-$discount;
printf("Total price: %.2f",$totalPrice);