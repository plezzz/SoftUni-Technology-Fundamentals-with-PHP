<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 20:17
 */

$typeOfDay = readline();
$age = intval(readline());
switch ($typeOfDay) {
    case "Weekday":
        {
            switch (true) {
                case((0 <= $age && $age <= 18) || (64 < $age && $age <= 122)):
                    {
                        echo "12$";
                        break;
                    }
                case (18 < $age && $age <= 64):
                    {
                        echo "18$";
                        break;
                    }
                    break;
                default:{
                    echo "Error!";
                }
            }
            break;
        }
    case "Weekend":
        {
            switch (true) {
                case((0 <= $age && $age <= 18) || (64 < $age && $age <= 122)):
                    {
                        echo "15$";
                        break;
                    }
                case (18 < $age && $age <= 64):
                    {
                        echo "20$";
                        break;
                    }
                    break;
                default:{
                    echo "Error!";
                }
            }
            break;
        }
    case "Holiday":
        {
            switch (true) {
                case(0 <= $age && $age <= 18):
                    {
                        echo "5$";
                        break;
                    }
                case (18 < $age && $age <= 64):
                    {
                        echo "12$";
                        break;
                    }
                case (64 < $age && $age <= 122):
                    {
                        echo "10$";
                        break;
                    }
                    break;
                default:{
                    echo "Error!";
                }
            }
        }
}