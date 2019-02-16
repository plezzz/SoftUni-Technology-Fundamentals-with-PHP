<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 14/02/2019
 * Time: 23:21
 */

$input=intval(readline());
function checkIntiger($answer):string{
    if ($answer>0){
        $answer= "The number $answer is positive.";
    }else if ($answer<0){
        $answer= "The number $answer is negative.";
    }else{
        $answer= "The number $answer is zero.";
    }
    return $answer;
}

echo checkIntiger($input);