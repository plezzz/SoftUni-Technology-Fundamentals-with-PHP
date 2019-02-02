<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 28/01/2019
 * Time: 15:04
 */

$number=readline();
$arr = str_split($number); // convert string to an array
$lastDigit=end($arr);

switch ($lastDigit){
    case 0:{
        echo "zero";
        break;
    }
    case 1:{
        echo "one";
        break;
    }
    case 2:{
        echo "two";
        break;
    }
    case 3:{
        echo "three";
        break;
    }
    case 4:{
        echo "four";
        break;
    }
    case 5:{
        echo "five";
        break;
    }
    case 6:{
        echo "six";
        break;
    }
    case 7:{
        echo "seven";
        break;
    }
    case 8:{
        echo "eight";
        break;
    }
    case 9:{
        echo "nine";
        break;
    }
    default:{
        echo "unknown";
    }

}

